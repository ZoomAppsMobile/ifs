<?
$mobileTel = explode( ':', Yii::$app->view->params['contact']->mobileTel);
$skype = explode( ':', Yii::$app->view->params['contact']->skype);

?>

<?=$this->render('modal-login')?>
<?=$this->render('modal-tyfregistr')?>
<?=$this->render('modal-contact-ifs-form')?>
<?=$this->render('modal-get-a-consultation')?>
<?=$this->render('registration-form')?>
<?=$this->render('registration-email')?>
<?=$this->render('registration-modal-go-to-email')?>
<?=$this->render('terms-and-conditions')?>
<?=$this->render('registration-main')?>
<header>
    <!-- MOBILE MENU -->
    <div class="mobile-menu">
        <ul class="first-menu">
            <?
            $m=0;?>
            <? foreach (Yii::$app->view->params['menu'] as $v):?>
                <? $m++;?>
                <? $submenu = $v->menuItems;?>
                <? if($m < 9):?>
                    <li>
                        <a href="<?=$v->url?>"><?=$v->text?></a>
                    </li>
                <? endif;?>
            <? endforeach;?>
        </ul>

        <ul class="second-menu">
            <? $m=0;?>
            <? foreach (Yii::$app->view->params['menu'] as $v):?>
                <? $m++;?>
                <? if($m > 8):?>
                    <li><a href="#"><?=$v->text?></a></li>
                <? endif;?>
            <? endforeach;?>
        </ul>
    </div>
    <!-- END MOBILE MENU -->

    <div class="container">

        <!-- mobile-right-menu-items blocks -->
        <div class="phone-active i-active" id="phone-active"><?=$mobileTel[1]?></div>

        <div class="search-active i-active" id="search-active">
            <input type="text">
            <button>
                <img src="/images/search.svg" alt="search">
            </button>
        </div>
        <!-- end mobile-right-menu-items blocks -->

        <!-- mobile-right-menu-items blocks -->
        <div class="phone-active i-active" id="phone-active"><?=$mobileTel[1]?></div>

        <div class="search-active i-active" id="search-active">
            <input type="text">
            <button>
                <img src="images/search.svg" alt="search">
            </button>
        </div>

        <div class="location-active i-active items-active" id="location-active">
            <? foreach (Yii::$app->view->params['country'] as $v):?>

            <? if($v->id == Yii::$app->session['country']):?><? $class = "location-item-active";?><? endif;?>
            <? if($v->id != Yii::$app->session['country']):?><? $class = "";?><? endif;?>
                <a href="/lang/set-country?country=<?=$v->id?>" class="<?=$class;?>"><?=$v->name?></a>
            <? endforeach;?>
        </div>
        <!-- end mobile-right-menu-items blocks -->


        <div class="cap">

            <div class="cap-left">

                <div class="logo">
                    <a href="/site/index"><img src="/images/logo.svg" alt="logo"></a>
                </div>

                <div class="hamburger-wrap">
                    <div class="hamburger" id="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>

                <nav class="menu">

                    <ul class="sf-menu">
                        <?

                        $m=0;?>
                        <? foreach (Yii::$app->view->params['menu'] as $v):?>
                            <? $m++;?>
                            <? $submenu = $v->menuItems;?>
                            <? if($m < 9):?>
                                <li>
                                    <a href="<?=$v->url?>"><?=$v->text?></a>
                                    <? if($submenu != null):?>
                                        <ul class="submenu-sub">
                                            <? foreach ($submenu as $sub):?>
                                                <li><a href="<?=$v->url?>#<?=$sub->url?>"><?=$sub->name?></a></li>
                                            <? endforeach;?>
                                        </ul>
                                    <? endif;?>
                                </li>
                            <? endif;?>
                        <? endforeach;?>

                        <li class="link-more">
                            <a href="#">More</a>
                            <ul class="submenu-sub">
                                <? $m=0;?>
                                <? foreach (Yii::$app->view->params['menu'] as $v):?>
                                    <? $m++;?>
                                    <? if($m > 8):?>
                                        <li><a href="#"><?=$v->text?></a></li>
                                    <? endif;?>
                                <? endforeach;?>
                            </ul>
                        </li>
                    </ul>

                </nav>

            </div>

            <div class="cap-right">

                <!-- MOBILE CABINET -->
                <div class="mobile-log-in">
                    <a href="#login-popup" class="ths-popup-link">
                        <img src="/images/rectangle-arrow.svg" alt="cabinet">
                    </a>
                </div>
                <!-- END MOBILE CABINET -->


                <!-- MOBILE RIGHT MENU BTN -->
                <div class="mobile-right-menu-btn">

                    <div class="mobile-right-menu-btn-wrap"><span></span></div>

                    <div class="mobile-right-menu-items">

                        <a href="#search-active">
                            <svg width="auto" height="28" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M18.691 18.5021L13.3746 12.9364C14.7306 11.5674 15.5707 9.6801 15.5707 7.59869C15.5707 3.42794 12.2003 0.0351562 8.05707 0.0351562C3.91385 0.0351562 0.543457 3.42794 0.543457 7.59869C0.543457 11.7694 3.91385 15.1622 8.05707 15.1622C9.87572 15.1622 11.5448 14.5078 12.8457 13.4219L18.175 19.0012C18.2452 19.0751 18.3389 19.1118 18.433 19.1118C18.5225 19.1118 18.6116 19.0783 18.681 19.0113C18.8234 18.8734 18.8277 18.6454 18.691 18.5021ZM8.05707 14.4419C4.30849 14.4419 1.25904 11.3722 1.25904 7.59869C1.25904 3.8252 4.30849 0.755492 8.05707 0.755492C11.8056 0.755492 14.8551 3.8252 14.8551 7.59869C14.8551 11.3722 11.8053 14.4419 8.05707 14.4419Z"
                                        fill="#FF5C28" />
                            </svg>
                        </a>

                        <a href="#phone-active">
                            <svg width="auto" height="28" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M15.467 19.0507C14.718 19.0507 13.8135 18.8625 12.8188 18.486C10.638 17.6616 8.26534 16.032 6.13785 13.8985C4.00976 11.7645 2.38478 9.3845 1.56199 7.1976C0.814286 5.20924 0.81247 3.57726 1.55776 2.83049C1.66492 2.72302 1.7739 2.60767 1.88651 2.48867C2.56641 1.77164 3.3347 0.964762 4.35304 1.00119C5.05473 1.03033 5.73464 1.46747 6.43088 2.33628C8.48814 4.90203 7.56062 5.81637 6.48719 6.87643L6.29769 7.06464C6.12211 7.24071 5.79034 8.05609 8.87683 11.1513C9.88427 12.1615 10.7434 12.901 11.4299 13.3485C11.8622 13.6302 12.6354 14.0564 12.9526 13.7383L13.1433 13.5452C14.1992 12.4712 15.111 11.5441 17.6677 13.6053C18.5341 14.3035 18.9694 14.9847 18.9984 15.6896C19.0402 16.7102 18.2295 17.4825 17.5139 18.1637C17.3959 18.2766 17.2808 18.3859 17.1737 18.4927C16.8038 18.8643 16.2122 19.0507 15.467 19.0507ZM4.28039 1.60711C3.5569 1.60711 2.90363 2.29681 2.32545 2.90698C2.2092 3.02963 2.09659 3.14862 1.9858 3.25973C1.43062 3.81586 1.48692 5.27724 2.12868 6.98389C2.9218 9.09186 4.49774 11.3953 6.5665 13.4699C8.63466 15.5433 10.9305 17.1236 13.0331 17.9184C14.735 18.5632 16.1923 18.6178 16.7462 18.0623C16.857 17.9512 16.9757 17.8382 17.098 17.7223C17.7198 17.1297 18.4251 16.4582 18.3942 15.7133C18.373 15.2015 18.0013 14.6508 17.2893 14.077C15.1588 12.3588 14.5631 12.9654 13.575 13.9702L13.3812 14.1663C12.909 14.6405 12.1419 14.5354 11.1006 13.8566C10.3783 13.3855 9.4859 12.6193 8.44939 11.5793C5.88781 9.01111 5.06866 7.43924 5.87025 6.63357L6.06339 6.44233C7.0678 5.45148 7.67384 4.85346 5.95986 2.71574C5.38651 2.00235 4.83799 1.62957 4.32761 1.60772C4.31187 1.60711 4.29613 1.60711 4.28039 1.60711Z"
                                        fill="#FF5C28" stroke="#FF5C28" stroke-width="0.75" />
                            </svg>
                        </a>

                        <a href="#location-active">
                            <svg width="auto" height="28" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M16.0506 4.30817C14.4092 1.89006 11.8079 0.50293 8.91403 0.50293C6.02021 0.50293 3.41883 1.89006 1.77743 4.30817C0.144086 6.71406 -0.233058 9.75997 0.766558 12.451C1.03393 13.1859 1.45895 13.8999 2.02679 14.5689L8.3417 22.1192C8.48452 22.2901 8.69378 22.3886 8.91403 22.3886C9.13429 22.3886 9.34354 22.2902 9.48636 22.1192L15.7995 14.571C16.3699 13.8981 16.7943 13.1849 17.0595 12.4559C18.0611 9.75997 17.684 6.71406 16.0506 4.30817ZM15.6517 11.9199C15.4472 12.4824 15.1134 13.0385 14.6601 13.5733L14.6566 13.5774L8.91403 20.4431L3.16796 13.5731C2.71489 13.0387 2.38109 12.4827 2.1746 11.9148C1.34792 9.68931 1.66165 7.17092 3.0141 5.17851C4.37079 3.17973 6.52136 2.03339 8.91403 2.03339C11.3067 2.03339 13.457 3.17969 14.8137 5.17851C16.1664 7.17092 16.4804 9.68931 15.6517 11.9199Z"
                                        fill="#FF5C28" />
                                <path
                                        d="M8.91389 5.04285C6.59264 5.04285 4.70393 6.96511 4.70393 9.32816C4.70393 11.6912 6.59239 13.6135 8.91389 13.6135C11.2354 13.6135 13.1238 11.6912 13.1238 9.32816C13.1238 6.96537 11.2351 5.04285 8.91389 5.04285ZM8.91389 12.083C7.4216 12.083 6.20747 10.8471 6.20747 9.32812C6.20747 7.80912 7.4216 6.57326 8.91389 6.57326C10.4062 6.57326 11.6203 7.80912 11.6203 9.32812C11.6203 10.8471 10.4062 12.083 8.91389 12.083Z"
                                        fill="#FF5C28" />
                            </svg>
                        </a>

                        <? $lang = \common\models\Countrylang::find()->where('country_id='.Yii::$app->session["country"].' AND status=1 AND language_id in'.Yii::$app->view->params['activeLanguage'])->all();?>
                        <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
                            <? foreach ($lang as $v):?>
                                <option <?=(Yii::$app->session["lang"]==$v->id)?'selected':''?> value="/lang/set-lang?lang=<?=$v->language_id?>"><?=$v->langName?></option>
                            <? endforeach;?>
                        </select>

                    </div>

                </div>
                <!-- END MOBILE RIGHT MENU BTN -->


                <div class="search">

                    <a href="#search-desktop-active">
                        <img src="/images/search.svg" alt="search">
                    </a>

                    <div class="search-desktop-active i-desktop-active" id="search-desktop-active">
                        <input type="text">
                        <button>
                            <img src="/images/search.svg" alt="search">
                        </button>
                    </div>

                </div>

                <div class="phone-wrap">
                    <div class="phone">
                        <img src="/images/phone.svg" alt="phone">
                        <span><?=$mobileTel[1]?></span>
                    </div>

                    <div class="skype">
                        <img src="/images/skype.png" alt="skype">
                        <span><?=$skype[1]?></span>
                    </div>
                </div>

                <div class="register-btns">
                    <a class="sign-up ths-popup-link" href="
                        <?if(!Yii::$app->session['success_registration'] && !Yii::$app->session['success_registration_step2'] && !Yii::$app->session['success_registration_step3']){?>#register-email<?}else if(Yii::$app->session['success_registration_step2']){?>#terms-and-conditions<?}elseif(Yii::$app->session['success_registration_step3']){?>#registration-main<?}else{?>#sign-up-popup<?}?>
                    ">Sign up1</a>
                    <a class="login ths-popup-link" href="#login-popup">Login</a>
                </div>

                <div class="lang-loc">

                    <? $lang = \common\models\Countrylang::find()->where('country_id='.Yii::$app->session["country"].' AND status=1 AND language_id in '.Yii::$app->view->params['activeLanguage'])->all();?>
                    <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
                        <? foreach ($lang as $v):?>
                            <option <?=(Yii::$app->session["lang"]==$v->id)?'selected':''?> value="/lang/set-lang?lang=<?=$v->language_id?>"><?=$v->langName?></option>
                        <? endforeach;?>
                    </select>

                    <div class="location">
                        <img src="/images/location.svg" alt="location">
                        <select class="language-button selectpicker" onchange="location = this.options[this.selectedIndex].value;">
                            <? foreach (Yii::$app->view->params['country'] as $v):?>
                                <option <?=(Yii::$app->session["country"]==$v->id)?'selected':''?> value="/lang/set-country?country=<?=$v->id?>"><?=$v->name?></option>
                            <? endforeach;?>
                        </select>
                    </div>
                </div>

            </div>

        </div>

    </div>

</header>