<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style>
    .wrap .container{
        width:100%;
        padding:0;
    }
</style>

<div class="banner" >
    <ul>
        <li><img src="img/banner-11.jpg"></li>
        <li><img src="img/banner-22.jpg"></li>
        <li><img src="img/banner-33.jpg"></li>
        <li><img src="img/banner-44.jpg"></li>
        <li><img src="img/banner-55.jpg"></li>
    </ul>
</div>

<?php
$js = <<<JS
    $('.banner').terseBanner(
        {
        adaptive:true,
        auto:1000,
        arrow:true,
        }
    );
    
JS;

$this->registerJs($js);

?>



<?php
$this->render('service.php');
?>