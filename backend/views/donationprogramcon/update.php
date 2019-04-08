<?php

use yii\helpers\Html;

$this->title = 'Редактирование контента';
$this->params['breadcrumbs'][] = ['label' => 'Donationprogramcons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="donationprogramcon-update">
    <h1><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
