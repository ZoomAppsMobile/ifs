<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->langName;
$this->params['breadcrumbs'][] = ['label' => 'Countrylangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countrylang-view">

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
//            'country_id',
            ['attribute'=>'country_id', 'value'=>function($model){ return $model->countryName;}],
            ['attribute'=>'language_id', 'value'=>function($model){ return $model->langName;}],
            [
                'attribute' => 'status',
                'filter' => \backend\controllers\Label::statusList(),
                'value' => function ($model) {
                    return \backend\controllers\Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],
            'sort',
        ],
    ]) ?>

</div>
