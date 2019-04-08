<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BiotransfactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Факты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransfact-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Biotransfact', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'format' => 'html',
                'attribute' => 'image',
                'value' => function($data){
                    return Html::img($data->getImage(), ['width'=>100]);
                }
            ],
            'content:ntext',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
        ],
    ]); ?>
</div>
