<?php

use yii\helpers\Html;

$this->title = 'Создание Preselect';
$this->params['breadcrumbs'][] = ['label' => 'Preselects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preselect-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
