<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminuserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '管理员';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="adminuser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('创建管理员', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'nickname',
            'email:email',
            //'profile:ntext',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
