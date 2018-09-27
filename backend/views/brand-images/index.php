<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;


use common\services\UrlService;

use common\services\StaticService;
use common\services\UtilService;

 StaticService::includeAppJsStatic("/js/web/brand/image.js",\backend\assets\AppAsset::className());

/* @var $this yii\web\View */
/* @var $searchModel common\models\BrandImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brand Images';
$this->params['breadcrumbs'][] = $this->title;
?>







<div class="brand-images-index">

    <h1><?= Html::encode($this->title) ?></h1><br>







    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'imageFile',[
            'labelOptions' => [ 'class' => 'bg-success']

    ])->fileInput() ?>

    <button class="btn btn-success ">上传图片</button>

    <?php ActiveForm::end() ?>





    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           // ['class' => 'yii\grid\SerialColumn'],

            'id',
             ['label'=>'缩略图','format'=>'raw','value'=>function($m){
                return Html::img($m->image_key,['alt' => '缩略图','width' => 80]);
            }],


            ['label'=>'创建时间','value'=>'created_time'],

            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{user-delete}',

            ],
        ],
    ]); ?>
</div>




