<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Biotransprocess */

$this->title = 'Создания процесса';
$this->params['breadcrumbs'][] = ['label' => 'Biotransprocesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="biotransprocess-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
