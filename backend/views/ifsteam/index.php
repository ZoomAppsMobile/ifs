<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IfsteamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Наша медицинская команда';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsteam-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<!--    <p>-->
<!--        --><?//= Html::a('Create Ifsteam', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
//            'image',
//            'position',
//            'experience',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
