<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsmain */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ifsmain-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'littleTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bigTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slogan')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
