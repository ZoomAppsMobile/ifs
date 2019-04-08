<?php

use yii\helpers\Html;

$this->title = 'Создания история и отзыва';
$this->params['breadcrumbs'][] = ['label' => 'Parentstories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentstory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
