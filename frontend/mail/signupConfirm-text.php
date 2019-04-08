<?php

    use common\modules\user\models\User;

    /* @var $this yii\web\View */
    /* @var $user User */

    $confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['/registration-modal/confirm', 'token' => $user->access_token]);

?>
Здравствуйте.

Для подтверждения вашего адреса электронной почты пройдите по этой ссылке:

<?= $confirmLink ?>
