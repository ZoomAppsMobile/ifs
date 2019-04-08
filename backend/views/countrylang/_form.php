<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="countrylang-form">
    <? $countries = \common\models\Country::getList();
    $countries[0] = 'Все страны';
//    print_r($countries);
//    die;

    ?>

    <?php if(Yii::$app->session->getFlash('language')):?>
        <div class="alert alert-danger" role="alert">
            <?= Yii::$app->session->getFlash('language'); ?>
        </div>
    <?php endif;?>
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'country_id')->dropDownList($countries) ?>

    <?= $form->field($model, 'language_id')->dropDownList(\common\models\Language::getList()) ?>

    <?= $form->field($model, 'status')->dropDownList([0 => 'Скрыто', 1 => 'Доступно']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
