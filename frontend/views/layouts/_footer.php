<footer class="footer" id="footer">

    <div class="container">

        <div class="footer-content d-flex">

            <div class="footer-left-mobile">
                <div class="footer-mobile-location footer-mobile-item">
                    <img src="/images/location.svg" alt="location">
                    <span><?=Yii::$app->view->params['contact']->address?></span>
                </div>

                <div class="footer-mobile-message footer-mobile-item">
                    <img src="/images/message.svg" alt="message">
                    <span><?=Yii::$app->view->params['contact']->email?></span>
                </div>

                <div class="footer-mobile-phone footer-mobile-item">
                    <img src="/images/phone.svg" alt="phone">
                    <span><?=Yii::$app->view->params['contact']->mobileTel?>, +7 702 1725689</span>
                </div>
            </div>

            <div class="footer-left">
                <span><?=Yii::$app->view->params['contact']->address?></span>
                <span><?=Yii::$app->view->params['contact']->email?></span>
                <span><?=Yii::$app->view->params['contact']->telegramTel?></span>
                <span><?=Yii::$app->view->params['contact']->mobileTel?></span>
            </div>

            <div class="footer-right">
                <div class="footer-right-title">
                    <h3>We are on the social networks:</h3>
                </div>

                <div class="footer-right-social">
                    <a href="<?=Yii::$app->view->params['contact']->youtube?>" target="_blank"><img src="/images/youtube.svg" alt="youtube"></a>
                    <a href="<?=Yii::$app->view->params['contact']->vk?>" target="_blank"><img src="/images/vk.svg" alt="vk"></a>
                    <a href="<?=Yii::$app->view->params['contact']->ok?>" target="_blank"><img src="/images/ok.svg" alt="ok"></a>
                    <a href="<?=Yii::$app->view->params['contact']->google?>" target="_blank"><img src="/images/google-plus.svg" alt="google-plus"></a>
                    <a href="<?=Yii::$app->view->params['contact']->telegram?>" target="_blank"><img src="/images/telegram.svg" alt="telegram"></a>
                    <a href="<?=Yii::$app->view->params['contact']->facebook?>" target="_blank"><img src="/images/facebook.svg" alt="facebook"></a>
                    <a href="<?=Yii::$app->view->params['contact']->twitter?>" target="_blank"><img src="/images/twitter.svg" alt="twitter"></a>
                </div>

                <div class="footer-right-copyright">
                    <p>International Fertility Solutions ©2018</p>
                </div>

                <div class="footer-mobile-copyright">
                    <p>IFS ©2018</p>
                </div>

            </div>
        </div>

    </div>

</footer>