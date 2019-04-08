<?php

use yii\helpers\Html;

$this->title = 'Редактирование подразделов  "Как все это работает"';
$this->params['breadcrumbs'][] = ['label' => 'Parenthowallworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="parenthowallwork-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
