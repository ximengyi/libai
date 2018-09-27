<?php

namespace backend\controllers;

use Yii;
use common\models\BrandImages;
use common\models\BrandImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\UploadForm;


/**
 * BrandImagesController implements the CRUD actions for BrandImages model.
 */
class BrandImagesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BrandImages models.
     * @return mixed
     */
    public function actionIndex()
    {

        $upload_model = new UploadForm();
        if (Yii::$app->request->isPost) {
            $upload_model->imageFile = UploadedFile::getInstance($upload_model, 'imageFile');
            $image_dir = 'brand';
            $upload_dir = $upload_model->upload($image_dir);
            if(!empty($upload_dir)){

              $brand_image = new BrandImages();
              $brand_image->created_time = date("Y-m-d H:i:s");
              $brand_image->image_key = $upload_dir;
              $brand_image->save();
            }
        }


        $searchModel = new BrandImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
             'model'=>$upload_model,
        ]);
    }

    /**
     * Displays a single BrandImages model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BrandImages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BrandImages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BrandImages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BrandImages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BrandImages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return BrandImages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BrandImages::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }




    public function actionSetImage()
    {

        $image_key = trim($this->post("image_key", ""));

        if (!$image_key) {
            return $this->renderJson([], "请上传图片之后再提交~~", -1);
        }

        $total_count = BrandImages::find()->count();
        if ($total_count >= 5) {

            return $this->renderJson([], "最多上传五张~~~", -1);
        }
        $model = new BrandImages();
        $model->image_key = $image_key;
        $model->created_time = date("Y-m-d H:i:s");
        $model->save(0);
        return $this->renderJson([], "操作成功");
    }



    public function actionUpload()
    {
        $model = new UploadForm();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {

                return;
            }
        }

        return $this->render('index', ['model' => $model]);
    }
}
