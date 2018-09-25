<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<div class="banner" id="home">
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
echo $this->render('service.php');
echo $this->render('about.php');
echo $this->render('gallery.php');
echo $this->render('testimonials.php');
echo $this->render('team.php');
echo $this->render('contact.php');


?>

