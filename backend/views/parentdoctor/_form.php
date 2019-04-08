<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use mihaildev\ckeditor\CKEditor;

?>
<div class="parentdoctor-form">

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

    <?php
    echo $form->field($model, 'contenta')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', // basic, standard, full
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>


    <?php
    echo $form->field($model, 'contentb')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', // basic, standard, full
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>



    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
