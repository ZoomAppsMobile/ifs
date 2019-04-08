<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "biotransprocess".
 *
 * @property int $id
 * @property string $imagea
 * @property string $imageb
 * @property string $name
 */
class Biotransprocess extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biotransprocess';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['imagea','imageb'],'file','extensions'=>'svg']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagea' => 'Картинка номер порядка',
            'imageb' => 'Картинка ',
            'name' => 'Название',
        ];
    }

    public function saveImagea($filename)
    {
        $this->imagea = $filename;
        return $this->save(false);
    }

    public function saveImageb($filename)
    {
        $this->imageb = $filename;
        return $this->save(false);
    }

    public function getImageA()
    {
        return ($this->imagea) ? '/uploads/' . $this->imagea : '/no-image.png';
    }
    public function getImageB()
    {
        return ($this->imageb) ? '/uploads/' . $this->imageb : '/no-image.png';
    }


}
