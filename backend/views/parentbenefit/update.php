<?php

use yii\helpers\Html;

$this->title = 'Редактирования пункта: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentbenefits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="parentbenefit-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
