<?php

use backend\controllers\LabelBig;
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Выгоды';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentbenefit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'name',
                'value' => $model->name,
                'format' => 'raw',
            ],
            [
                'attribute' => 'isBig',
                'filter' => LabelBig::statusList(),
                'value' => function ($model) {
                    return LabelBig::statusLabel($model->isBig);
                },
                'format' => 'raw',
            ],
//            [
//                'attribute' => 'content',
//                'value' => $model->content,
//                'format' => 'raw',
//            ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>
</div>
