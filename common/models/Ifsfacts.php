<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ifsfacts".
 *
 * @property int $id
 * @property string $content
 * @property string $contentsvg
 */
class Ifsfacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ifsfacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content', 'contentsvg'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Содержание',
            'contentsvg' => 'Contentsvg',
        ];
    }
}
