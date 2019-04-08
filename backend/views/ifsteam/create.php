<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ifsteam */

$this->title = 'Cоздания сотрудника';
$this->params['breadcrumbs'][] = ['label' => 'Ifsteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ifsteam-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
