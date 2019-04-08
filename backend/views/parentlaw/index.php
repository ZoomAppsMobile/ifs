<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Законы о суррогатном материнстве';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentlaw-index">

    <h1><?= Html::encode($this->title) ?></h1>
<!--    <p>-->
<!--        --><?//= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
<!--    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'contenta:ntext',
            'contentb:ntext',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update} {view}'],
            ],

    ]); ?>
</div>
