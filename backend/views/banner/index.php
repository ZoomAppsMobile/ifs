<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BiotransmainSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Баннер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransmain-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Biotransmain', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'littleTitle',
            'bigTitle',
            'slogan',
//            'image',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
        ],
    ]); ?>
</div>
