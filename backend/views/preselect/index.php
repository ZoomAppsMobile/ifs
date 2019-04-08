<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Предвыбор';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="preselect-index">

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
            ['attribute'=>'country_id', 'value'=>function($model){ return $model->countryName;},'filter'=>\common\models\Country::getList()],

            ['attribute'=>'language_id', 'value'=>function($model){ return $model->langName;},'filter'=>\common\models\Language::getList()],

                ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
            ],
    ]); ?>
</div>
