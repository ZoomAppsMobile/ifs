<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentstories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentstory-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'name',
                'value' => $model->name,
                'format' => 'raw',
            ],
            [
                'attribute' => 'city',
                'value' => $model->city,
                'format' => 'raw',
            ],
            [
                'attribute' => 'contenta',
                'value' => $model->contenta,
                'format' => 'raw',
            ],
            [
                'attribute' => 'contentb',
                'value' => $model->contentb,
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
