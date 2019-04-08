<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Истории и отзывы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentstory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'city',
                'value' => $model->city,
                'format' => 'raw',
            ],
//            [
//                'attribute' => 'contenta',
//                'value' => $model->contenta,
//                'format' => 'raw',
//            ],
//            [
//                'attribute' => 'contentb',
//                'value' => $model->contentb,
//                'format' => 'raw',
//            ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>
</div>
