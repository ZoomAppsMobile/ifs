<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = ' Как начать';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donationhowstart-index">

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
            [
                'attribute' => 'name',
                'value' => $model->name,
                'format' => 'raw',
            ],
//            'country_id',
//            'language_id',

                ['class' => 'yii\grid\ActionColumn'],
            ],
    ]); ?>
</div>
