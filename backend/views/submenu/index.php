<?php

use backend\controllers\Label;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubmenuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="submenu-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Cоздать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            [
//                'value' => function ($model) {
//                    return
//                        Html::a('<span class="glyphicon glyphicon-arrow-up"></span>', ['move-up', 'id' => $model->id]) .
//                        Html::a('<span class="glyphicon glyphicon-arrow-down"></span>', ['move-down', 'id' => $model->id]);
//                },
//                'format' => 'raw',
//                'contentOptions' => ['style' => 'text-align: center'],
//            ],
            'name',
            ['attribute'=>'menu_id', 'value'=>function($model){ return $model->menuName;},'filter'=>\common\models\Menu::getList()],
            [
                'attribute' => 'status',
                'filter' => Label::statusList(),
                'value' => function ($model) {
                    return Label::statusLabel($model->status);
                },
                'format' => 'raw',
            ],



            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
