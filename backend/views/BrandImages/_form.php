<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BrandImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brand-images-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'image_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
