<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="parenthowallwork-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'url')->textarea()?>

    <?= $form->field($model, 'status')->dropDownList([0 => 'Скрыто', 1 => 'Доступно'], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
