<?php

namespace backend\controllers;
use Yii;
use yii\web\Controller;
class TestController extends Controller
{


    public function actionIndex(){

        echo get_class();die;
       echo __CLASS__."\n";
       echo __METHOD__;
       die;

      $url =  Yii::getAlias('@backend');
       $url =  str_replace("\\","/",$url);
        echo $url;die;
       var_dump($url);die;

    }

}
