<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<div class="banner" id="home">
    <ul>

        <?php foreach ($brand_image as $item): ?>
            <li><img src="<?=$item->image_key; ?>"></li>
        <?php  endforeach; ?>

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

