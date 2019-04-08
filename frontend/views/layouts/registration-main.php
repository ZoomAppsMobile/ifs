<section class="registration-main ths-modal-popup" id="registration-main" style="display: none;">
    <div class="registration-main-container">
        <form action="/site/signup4">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
            <?
                if(Yii::$app->session['success_registration_step3'])
                    $UserAgree = \common\models\UserAgree::findOne(Yii::$app->session['success_registration_step3']);
                else
                    $UserAgree = new \common\models\UserAgree;
            ?>
            <div class="row">
                <div class="col-12">
                    <div class="form_main_logo">
                        <div class="form_main_logo_cl">
                            <div>
                                <img src="images/logo.png" alt="">
                            </div>
                            <div class="modal-close">
                                <img src="images/close.png" alt="">
                            </div>
                        </div>
                        <h2>Registration Form</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form_main_header">
                        <h1>Dear Prospective #Выбранная роль#</h1>
                        <p>Before proceeding to the next stage of registration,
                            there are a few important considerations that you must be aware of,
                            please read the following statements carefully and answer accordingly.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form_main_questions">
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree1]" value="1" <?if($UserAgree->agree1 == 1){?>checked<?}?>>

                            <p>Я понимаю, что как донор яйцеклеток,
                                я должна буду самостоятельно делать себе инъекции,
                                примерно, в течение, 20 дней.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree2]" value="1" <?if($UserAgree->agree2 == 1){?>checked<?}?>>

                            <p>Как донор яйцеклеток, я понимаю, что должна соответствовать следующим
                                требованиям: быть женщиной в возрасте от 20 до 31 года, иметь как минимум
                                одного собственного ребенка, быть некурящей, не употребляющей наркотики,
                                соматически и психически здоровой, не страдающей значительным избытком
                                либо дефицитом веса.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree3]" value="1" <?if($UserAgree->agree3 == 1){?>checked<?}?>>

                            <p>  Как донор яйцеклеток, я понимаю, что у меня должно быть два здоровых яичника.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree4]" value="1" <?if($UserAgree->agree4 == 1){?>checked<?}?>>

                            <p> Как донор яйцеклеток, я понимаю, что пункция моих яйцеклеток будет
                                производится под наркозом.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree5]" value="1" <?if($UserAgree->agree5 == 1){?>checked<?}?>>

                            <p>Как донор яйцеклеток, я понимаю,
                                что в течении всей программы я должна буду пройти около
                                пятнадцати различных медицинских обследований.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree6]" value="1" <?if($UserAgree->agree6 == 1){?>checked<?}?>>

                            <p>Я понимаю, что донорство яйцеклеток - очень серьезный вопрос,
                                и что потенциальные родители полностью доверяют мне в том, что я буду
                                следовать инструкциям и сделаю все возможное для успешного рождения ребенка.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree7]" value="1" <?if($UserAgree->agree7 == 1){?>checked<?}?>>

                            <p>Я согласна получать рекламные сообщения от IFS</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree8]" value="1" <?if($UserAgree->agree8 == 1){?>checked<?}?>>

                            <p> Настоящим я подтверждаю, что вся предоставленная мною ранее информация
                                - достоверная и полная. Также я подтверждаю, что вся другая информация,
                                которую я предоставлю для последующей регистрации также будет достоверной,
                                актуальной и полной</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree9]" value="1" <?if($UserAgree->agree9 == 1){?>checked<?}?>>

                            <p> Мое имя, дата и емейл, указанные ниже, являются моей подписью, которая
                                подтверждает мое согласие со всеми вышеуказанными заявлениями.</p><br>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" name="UserAgree[agree10]" value="1" <?if($UserAgree->agree10 == 1){?>checked<?}?>>

                            <p>I hereby state that all of the previous answers were provided truthfully and fully.
                                Further, I agree to provide the remainder of the answers in this form to the fullest knowledge
                                and disclosure of my person. My name, date, and email address are my proof of signature and acceptance
                                of integrity in responding to this form</p><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="registration_main_signature">
                        <?
                            if(Yii::$app->session['success_registration_step3'])
                                $profile = \common\models\Profiles::findOne(Yii::$app->session['success_registration_step3']);
                            else
                                $profile = new \common\models\Profiles;
                        ?>
                        <div class="main_signature_inp">
                            <p>Full Name</p>
                            <input type="text" placeholder="Arthur Smith" value="<?=$profile->fio?>" name="Profiles[fio]">
                        </div>
                        <div class="main_signature_inp">
                            <p>Email</p>
                            <input type="text" placeholder="a_smith@gmail" value="<?=$profile->email?>" name="Profiles[email]">
                        </div>
                        <div class="main_signature_inp">
                            <p>Date</p>
                            <input type="text" placeholder="24" value="<?=$profile->created_at?>" readonly="readonly" class="created_at">
                        </div>
                    </div>
                    <div class="errors4" style="color:red;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="registration_main_confirm">
                        <a href="#" class="registration-main-a2">Yes I agree</a>
                        <a href="#" class="modal-close">No I don't</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>