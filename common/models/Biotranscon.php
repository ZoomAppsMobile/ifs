<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "biotranscon".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Biotranscon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'biotranscon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовка факта',
            'content' => 'Содержания',
        ];
    }
}
