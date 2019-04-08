<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "ifsabout".
 *
 * @property int $id
 * @property string $subtitlea
 * @property string $subtitleb
 * @property string $content
 * @property string $url
 */
class Ifsabout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ifsabout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subtitlea', 'subtitleb', 'content', 'url'], 'required'],
            [['content'], 'string'],
            [['subtitlea', 'subtitleb', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subtitlea' => 'Левый подзаголовок',
            'subtitleb' => 'Правый подзаголовок',
            'content' => 'Содержание',
            'url' => 'Ссылка на видео',
        ];
    }
}
