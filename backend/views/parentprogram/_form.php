<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="parentprogram-form">


    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>


        <?php
        echo $form->field($model, 'image')->widget(FileInput::classname(), [
            'pluginOptions' => [
                'showUpload' => false ,
            ] ,
            'options' => ['accept' => 'image/*'],
        ]);
        ?>

        <?= $form->field($model, 'buttonName')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'status')->dropDownList([0 => 'Скрыто', 1 => 'Доступно'], ['prompt' => '']) ?>

        <div class="form-group">
            <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>
</div>
