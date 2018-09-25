<?php

use yii\helpers\Html;
use yii\grid\GridView;


use \app\common\services\UrlService;

use \app\common\services\StaticService;
use \app\common\services\UtilService;

// StaticService::includeAppJsStatic("/js/web/brand/image.js",\backend\assets\AppAsset::className());

/* @var $this yii\web\View */
/* @var $searchModel common\models\BrandImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brand Images';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="brand-images-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Brand Images', ['create'], ['class' => 'btn btn-success']) ?>
    </p>








    <div class="modal fade" id="brand_image_wrap" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">上传图片</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <form class="upload_pic_wrap" target="upload_file" enctype="multipart/form-data" method="POST" action="<?=UrlService::buildWebUrl("/upload/pic");?>">
                                <div class="upload_wrap pull-left">
                                    <i class="fa fa-upload fa-2x"></i>
                                    <input type="hidden" name="bucket" value="brand" />
                                    <input type="file" name="pic" accept="image/png, image/jpeg, image/jpg,image/gif">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary save">保存</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <iframe name="upload_file" class="hide"></iframe>









    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'image_key',
            'created_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
