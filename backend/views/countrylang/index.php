<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = '  Страны с языком';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countrylang-index">

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
//            'country_id',
            ['attribute'=>'country_id', 'value'=>function($model){ return $model->countryName;},'filter'=>\common\models\Country::getList()],

            ['attribute'=>'language_id', 'value'=>function($model){ return $model->langName;},'filter'=>\common\models\Language::getList()],
            [
                'value' => function ($model) {
                    return
                        Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', ['move-up', 'id' => $model->id]) .
                        Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', ['move-down', 'id' => $model->id]);
                },
                'format' => 'raw',
                'contentOptions' => ['style' => 'text-align: center'],
            ],
            [
                'attribute' => 'status',
                'filter' => \backend\controllers\Label::statusList(),
                'value' => function ($model) {
                    return \backend\controllers\Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],

                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>
</div>
