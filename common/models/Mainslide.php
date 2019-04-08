<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mainslide".
 *
 * @property int $id
 * @property string $littleTitle
 * @property string $bigTitle
 * @property string $slogan
 * @property string $content
 * @property string $image
 * @property int $cssNumber
 */
class Mainslide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mainslide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['littleTitle', 'bigTitle', 'slogan', 'content', 'image', 'cssNumber'], 'required'],
            [['content'], 'string'],
            [['cssNumber'], 'integer'],
            [['littleTitle', 'bigTitle', 'slogan', 'image'], 'string', 'max' => 255],
            [['image'],'file','extensions'=>'png,jpg']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'littleTitle' => 'Маленький заголовок ',
            'bigTitle' => 'Большой заголовок ',
            'slogan' => 'Девиз',
            'content' => 'Содержания',
            'image' => 'Картинка',
            'cssNumber' => 'Css Number',
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