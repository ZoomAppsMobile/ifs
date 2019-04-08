<?php

use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mainslide */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mainslide-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'littleTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bigTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slogan')->textInput(['maxlength' => true]) ?>

    <?php

    echo $form->field($model, 'content')->widget(CKEditor::className(),[
        'editorOptions' => [
            'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
            'inline' => false, //по умолчанию false
        ],
    ]);
    ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'cssNumber')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
