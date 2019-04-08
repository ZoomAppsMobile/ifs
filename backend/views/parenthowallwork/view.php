<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = ' Как все это работает';
$this->params['breadcrumbs'][] = ['label' => 'Parenthowallworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parenthowallwork-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a('Удалить', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            [
                'attribute' => 'url',
                'value' => $model->url,
                'format' => 'raw',
            ],
            [
                'attribute' => 'status',
                'filter' => \backend\controllers\Label::statusList(),
                'value' => function ($model) {
                    return \backend\controllers\Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
