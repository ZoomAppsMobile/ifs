<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $mobileTel
 * @property string $telegramTel
 * @property string $email
 * @property string $address
 * @property string $facebook
 * @property string $vk
 * @property string $instagram
 * @property string $twitter
 * @property string $google
 * @property string $youtube
 * @property string $ok
 * @property string $telegram
 * @property string $skype
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mobileTel', 'telegramTel', 'email', 'address', 'facebook', 'vk', 'instagram', 'twitter', 'google', 'youtube', 'ok', 'telegram', 'skype','urlMap'], 'required'],
            [['mobileTel', 'telegramTel', 'email', 'address', 'facebook', 'vk', 'instagram', 'twitter', 'google', 'youtube', 'ok', 'telegram', 'skype','urlMap'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobileTel' => 'Мобильный телефон',
            'telegramTel' => 'Телеграм',
            'email' => 'Эл. адрес',
            'address' => 'Адрес',
            'facebook' => 'URL-адрес Facebook ',
            'vk' => 'URL-адрес Vk',
            'instagram' => 'URL-адрес Instagram',
            'twitter' => 'URL-адрес Twitter',
            'google' => 'URL-адрес Google',
            'youtube' => 'URL-адрес Youtube',
            'ok' => 'URL-адрес Ok',
            'telegram' => 'Телеграм',
            'skype' => 'Skype',
            'urlMap' => 'Ссылка на карту'
        ];
    }
}
