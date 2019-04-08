<?php

    use common\modules\user\models\User;
    use yii\helpers\Html;

    /* @var $this yii\web\View */
    /* @var $user User */

    $confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/registration-modal/confirm', 'token' => $user->access_token]);

?>
<div class="signup-confirm">
    <p>Здравствуйте.</p>

    <p>Для подтверждения вашего адреса электронной почты пройдите по этой ссылке:</p>

    <p><?= Html::a(Html::encode($confirmLink), $confirmLink) ?></p>
</div>
