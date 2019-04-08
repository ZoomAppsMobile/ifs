<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BiotranscostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Costs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotranscost-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
//            'price',
//            'buttonName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
