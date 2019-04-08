  <div class="registration-form sign-up-popup ths-modal-popup" id="sign-up-popup" <?if($_GET['success'] && $_GET['success']==true){?>style="display:block;"<?}?>>
       <div class="container reg_white_background">
           <form action="/site/signup2">
            <?
                if(Yii::$app->session['success_registration'])
                    $profile = \common\models\Profiles::findOne(Yii::$app->session['success_registration']);
                else
                    $profile = new \common\models\Profiles;
            ?>
            <div class="white_box">
                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
                <div class="row">
                <div class="col-12">
                        <div class="reg_head">
                            <div class="logo_reg_form">
                                <img src="/images/logo.png" alt="">
                            </div>
                            <a href="#" class="reg_cross_close modal-close"><img src="/images/close.png" alt=""></a>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-12">  
                            <div class="Name_email">  
                                <div class="reg_mobile_text">
                                  <p>Дорогой пользователь, зарегистрировавшись на нашем сайте,
                                   вы получите массу возможностей и большое количество очень нужной 
                                   и полезной информации. Вам откроются страницы, которые закрыты для 
                                   посетителей без регистрации.</p>
                                </div>
                                <div >
                                    <p>First Name*</p>
                                    <input type="text" name="Profiles[first_name]" value="<?=$profile->first_name?>">
                                </div>
                                <div >
                                    <p>Last Name*</p>
                                    <input type="text" name="Profiles[last_name]" value="<?=$profile->last_name?>">
                                </div>
                                <div class="reg_mobile_hide">
                                    <p>Email*</p>
                                    <input type="text" name="Profiles[email]" value="<?=$profile->email?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="socials">  
                                <div>
                                    <p>WatsApp</p>
                                    <input type="text" name="Profiles[vatzup]" value="<?=$profile->vatzup?>">
                                </div>
                                <div>
                                    <p>Skype</p>
                                    <input type="text" name="Profiles[skype]" value="<?=$profile->skype?>">
                                </div>
                                <div>
                                    <p>Telegram</p>
                                    <input type="text" name="Profiles[telegram]" value="<?=$profile->telegram?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tel_and_numb">  
                                <div>
                                    <p>Mobile Contact Number*</p>
                                    <input type="text" name="Profiles[mobile]" value="<?=$profile->mobile?>">
                                </div>
                                <div>
                                    <p>Password*</p>
                                    <input type="text" name="User[password]">
                                    
                                </div>
                                <div>
                                    <p>Confirm Password*</p>
                                    <input type="text" name="User[password_repeat]">
                                </div>
                            </div>
                            <div class="pass_note">
                                    <p class="pass_note_p">
                                    Password must be 8 characters and contain one lower,
                                    uppercase, latin letter and one number. Special character other than
                                    !,@,$,%,^,&,* is not allowed. 
                                    </p>
                            </div>
                            <div class="submit">
                                <a href="#" class="registration_submit_button">Submit</a>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-12">
                    <p class="offer_sign_up">Alredy Registered?<a href="#login-popup" class="offer_sign_up_link ths-popup-link">Click here to Login</a></p>
                    </div>
                </div>
                <div class="errors2" style="color:red;"></div>
                </form>
                </div>
       </div>
  </div>