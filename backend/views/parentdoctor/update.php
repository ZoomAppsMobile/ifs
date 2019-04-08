<?php

use yii\helpers\Html;

$this->title = 'Редактирования врача: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentdoctors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="parentdoctor-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
    'model' => $model, 'new_model' => $new_model, 'id' => $id,
    ]) ?>
</div>
