<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "buttons".
 *
 * @property int $id
 * @property string $name
 * @property string $url
 */
class Buttons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buttons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['name', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Названия кнопка',
            'url' => 'Url',
        ];
    }
}
