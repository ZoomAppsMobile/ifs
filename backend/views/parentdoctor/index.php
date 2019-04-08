<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Наши ведущие врачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentdoctor-index">

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
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
