<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "biotransprocessbutton".
 *
 * @property int $id
 * @property string $name
 */
class Biotransprocessbutton extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biotransprocessbutton';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
        ];
    }
}
