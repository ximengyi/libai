<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;
use backend\models\SignupForm;
/**
 * Site controller
 */
class SiteController extends Controller
{
   // public $enableCsrfValidation = false;
    public $layout = false;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error','signup'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','signup'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post','get'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('login');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['/article/index']);
        }

       if (Yii::$app->request->isPost) {
            $model = new LoginForm();
            if ($model->load(Yii::$app->request->post(),'') && $model->login()) {

                return $this->redirect(['/article/index']);
            } else {
                $model->password = '';
                return $this->render(
                    'login',
                    [
                        'model' => $model,
                        'message' => '用户名或密码不正确，请重新输入',
                    ]
                );
            }
        }else{
            return $this->render('login');
        }

    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['/site/index']);

    }



    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {

            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->redirect(['/site/index']);
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

}
