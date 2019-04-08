<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotranscon */

$this->title = 'Создания';
$this->params['breadcrumbs'][] = ['label' => 'Biotranscons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotranscon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
