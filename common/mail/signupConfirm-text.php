<?php

    use common\modules\user\models\User;

    /* @var $this yii\web\View */
    /* @var $user User */

    $confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/user/signup/confirm', 'token' => $user->token]);

?>
Здравствуйте.

Для подтверждения вашего адреса электронной почты пройдите по этой ссылке:

<?= $confirmLink ?>
