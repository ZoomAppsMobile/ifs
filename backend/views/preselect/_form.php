<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="preselect-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'country_id')->dropDownList(\common\models\Country::getList()) ?>

    <?= $form->field($model, 'language_id')->dropDownList(\common\models\Language::getList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    </div>
