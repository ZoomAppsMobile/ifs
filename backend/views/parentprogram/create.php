<?php

use yii\helpers\Html;

$this->title = 'Создания программа';
$this->params['breadcrumbs'][] = ['label' => 'Parentprograms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentprogram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
