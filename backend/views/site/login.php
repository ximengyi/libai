<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use backend\assets\AppAsset;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html>
<head>
    <title>登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" />
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    <link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
<!--    <script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function(c) {
        $('.close').on('click', function(c){
            $('.login-form').fadeOut('slow', function(c){
                $('.login-form').remove();
            });
        });

        $('#rememberCheck').onclick( function () {

            if( this.checked ){
                $(this).prop("checked",0);
            }else{
                $(this).prop("checked",1);
            }

            console.log(isChecked);
        })
    });




</script>
<!--SIGN UP-->

<h1>Floorball Login Form</h1>
<h3><?=$message ?? ''; ?></h3>

<div class="login-form">

    <div class="close"> </div>
    <div class="head-info">
        <label class="lbl-1"> </label>
        <label class="lbl-2"> </label>
        <label class="lbl-3"> </label>
    </div>
    <div class="clear"> </div>
    <div class="avtar">
        <img src="images/avtar.png" />
    </div>
     <form  action="/index.php?r=site/login"  method="post">
        <input type="text" class="text" name="username" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
        <div class="key">
            <input type="password"  name ="password"  value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
        </div>
         <input id="rememberCheck" type="checkbox" name="rememberMe"/>&nbsp&nbsp记住密码
                  <input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>" />
    <div class="signin">
        <input type="submit" value="Login" />
    </div>
     </form>
</div>

<div class="copy-rights">
    <p>Copyright &copy; 2018.Company name All rights reserved.</p>
</div>

    </body>
    </html>
