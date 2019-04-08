<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ifsdiff".
 *
 * @property int $id
 * @property string $content
 */
class Ifsdiff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ifsdiff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'required'],
            [['content'], 'string'],
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
        ];
    }
}
