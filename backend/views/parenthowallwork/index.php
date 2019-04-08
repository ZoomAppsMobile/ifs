<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Как все это работает';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parenthowallwork-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    <p>-->
<!--        --><?//= Html::a('Создать ', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'url',

            [
                'attribute' => 'status',
                'filter' => \backend\controllers\Label::statusList(),
                'value' => function ($model) {
                    return \backend\controllers\Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],

                ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
            ],
    ]); ?>
</div>
