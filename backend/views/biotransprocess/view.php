<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Biotransprocess */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Biotransprocesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="biotransprocess-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
<!--        --><?//= Html::a('Delete', ['delete', 'id' => $model->id], [
//            'class' => 'btn btn-danger',
//            'data' => [
//                'confirm' => 'Are you sure you want to delete this item?',
//                'method' => 'post',
//            ],
//        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'format' => 'html',
                'attribute' => 'imagea',
                'value' => function($data){
                    return Html::img($data->getImagea(), ['width'=>50]);
                }
            ],
            [
                'format' => 'html',
                'attribute' => 'imageb',
                'value' => function($data){
                    return Html::img($data->getImageb(), ['width'=>50]);
                }
            ],

        ],
    ]) ?>

</div>
