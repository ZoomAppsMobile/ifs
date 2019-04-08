<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mainprogress".
 *
 * @property int $id
 * @property string $content
 */
class Mainprogress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mainprogress';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Содержания',
        ];
    }
}
