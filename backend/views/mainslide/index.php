<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MainslideSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Баннер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mainslide-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Cоздать баннер', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'content:ntext',
            //'image',
            //'cssNumber',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
