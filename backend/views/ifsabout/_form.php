<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsabout */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ifsabout-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subtitlea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitleb')->textInput(['maxlength' => true]) ?>

    <?php

    echo $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
