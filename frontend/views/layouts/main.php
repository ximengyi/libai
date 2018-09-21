<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    // NavBar::begin([
    //     'brandLabel' => Yii::$app->name,
    //     'brandUrl' => Yii::$app->homeUrl,
    //     'options' => [
    //         'class' => 'navbar-inverse navbar-fixed-top',
    //     ],
    // ]);
    // $menuItems = [
    //     ['label' => 'Home', 'url' => ['/site/index']],
    //     ['label' => 'About', 'url' => ['/site/about']],
    //     ['label' => 'Contact', 'url' => ['/site/contact']],
    // ];
    // if (Yii::$app->user->isGuest) {
    //     $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    //     $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    // } else {
    //     $menuItems[] = '<li>'
    //         . Html::beginForm(['/site/logout'], 'post')
    //         . Html::submitButton(
    //             'Logout (' . Yii::$app->user->identity->username . ')',
    //             ['class' => 'btn btn-link logout']
    //         )
    //         . Html::endForm()
    //         . '</li>';
    // }
    // echo Nav::widget([
    //     'options' => ['class' => 'navbar-nav navbar-right'],
    //     'items' => $menuItems,
    // ]);
    // NavBar::end();
    // ?>

    <div class="header-bottom">
        <div class="container">
            <div class="fixed-header">
                <!--logo-->
                <div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <a href="index.html"><h1>Decorating</h1></a>
                </div>
                <!--//logo-->
                <div class="top-menu wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <span class="menu"> </span>
                    <nav class="link-effect-4" id="link-effect-4">
                        <ul>
                            <li class="active"><a data-hover="Home" href="index.html">Home</a></li>
                            <li><a data-hover="Services" href="#services" class="scroll">Services</a></li>
                            <li><a data-hover="About" href="#about" class="scroll">About</a></li>
                            <li><a data-hover="Gallery" href="#gallery" class="scroll">Gallery</a></li>
                            <li><a data-hover="Testimonials" href="#testimonials" class="scroll">Testimonials</a></li>
                            <li><a data-hover="Team" href="#team" class="scroll">Team</a></li>
                            <li><a data-hover="Contact" href="#contact" class="scroll">Contact</a></li>

                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </div>


    <?php
    $js = <<<JS
    $("span.menu").click(function(){
                        $(".top-menu ul").slideToggle("slow" , function(){
                        });
                    });


        $(document).ready(function() {
                        var navoffeset=$(".header-bottom").offset().top;
                        $(window).scroll(function(){
                            var scrollpos=$(window).scrollTop();
                            if(scrollpos >=navoffeset){
                                $(".header-bottom").addClass("fixed");
                            }else{
                                $(".header-bottom").removeClass("fixed");
                            }
                        });

                    });
    
JS;

    $this->registerJs($js);

    ?>


















    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
