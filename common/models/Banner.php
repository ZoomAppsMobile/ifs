<?php
namespace common\models;

use Yii;

class Banner extends \yii\db\ActiveRecord
{


    public static function tableName()
    {
        return 'banner';
    }

    public function rules()
    {
        return [
            [['littleTitle', 'bigTitle', 'slogan'], 'required'],
            [['littleTitle', 'bigTitle', 'slogan'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>'png,jpg']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'littleTitle' => '	Маленький заголовок',
            'bigTitle' => 'Большой заголовок',
            'slogan' => 'Девиз',
            'image' => 'Картинка',
        ];
    }


    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

}
