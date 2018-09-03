<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BrandImages */

$this->title = 'Create Brand Images';
$this->params['breadcrumbs'][] = ['label' => 'Brand Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brand-images-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
