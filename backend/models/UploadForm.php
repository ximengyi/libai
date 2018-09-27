<?php
namespace backend\models;

use yii\base\Model;
use yii\web\UploadedFile;
use common\services\UrlService;
class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public $imageDir;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg,jpeg'],
        ];
    }

    public function upload($image_dir='default')
    {
        // $this->imageDir =$image_dir;
        // $uploadPath = UrlService::buildBackendUrl() ;
        // $uploadPath = $uploadPath.$this->imageDir;
        $upload_dir = 'uploads/' .$image_dir.'/';
        if(!file_exists($upload_dir)){

            mkdir($upload_dir,0777);
            chmod($upload_dir,0777);
        }
        $upload_dir_path = $upload_dir . $this->imageFile->baseName . '.' . $this->imageFile->extension;
        if ($this->validate()) {
            $this->imageFile->saveAs($upload_dir_path);

            return $upload_dir_path;

        } else {

            return false;
        }
    }
}