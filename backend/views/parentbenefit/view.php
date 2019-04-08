<?php

use backend\controllers\LabelBig;
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Parentbenefits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentbenefit-view">

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
                'attribute' => 'content',
                'value' => $model->content,
                'format' => 'raw',
            ],
            [
                'attribute' => 'isBig',
                'value' => function ($model) {
                    return LabelBig::statusLabel($model->isBig);
                },
                'format' => 'raw',
            ],
        ],
    ]) ?>

</div>
