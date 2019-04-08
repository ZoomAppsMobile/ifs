<div class="registration-main-main ths-modal-popup" id="register-email">
  <div class="registration-main-main-container">
    <form action="/site/signup">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>"/>
      <div class="row">
        <div class="col-12">
          <div class="main_reg">
            <div class="form_main_main_logo_cl">
              <div>
                <img src="/images/logo.png" alt="">
              </div>
              <a href="#" class="modal-close">
                <img src="/images/close.png" alt="">
              </a>
            </div>
            <h2>Дорогой пользователь, зарегистрировавшись на нашем сайте,
              вы получите массу возможностей и большое количество очень нужной
              и полезной информации. Вам откроются страницы, которые закрыты для
              посетителей без регистрации.</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="i_am_interested_field">
            <div class="your_email_section">
              <div class="y_email_section_1">
                <h3>Your email</h3><input type="text" name="SignupForm[email]">
              </div>
              <div class="y_email_section_2">
                <p><span>The email adress you entered is already registered with IFS.</span><br>
                  Please choose another email address or <span><a href="">login</a></span> to proceed</p>
              </div>
            </div>
            <div class="i_am_field_section">
              <div class="i_am_field_section_left">
                <p>I am</p>
              </div>
              <div class="i_am_field_section_right">
                <label class="radio-input">
                  <p>Intended Parent</p>
                  <input type="radio" checked="checked" name="SignupForm[type]" value="1">
                  <span class="checkmark"></span>
                </label>
                <label class="radio-input">
                  <p>Surrogate</p>
                  <input type="radio" name="SignupForm[type]" value="2">
                  <span class="checkmark"></span>
                </label>
                <label class="radio-input">
                  <p>Egg Donor</p>
                  <input type="radio" name="SignupForm[type]" value="3">
                  <span class="checkmark"></span>
                </label>
                <label class="radio-input">
                  <p>Surrogate & Egg Donor</p>
                  <input type="radio" name="SignupForm[type]" value="4">
                  <span class="checkmark"></span>
                </label>
                <label class="radio-input">
                  <p>Biotransportation Client</p>
                  <input type="radio" name="SignupForm[type]" value="5">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="interested_in_section_field">
              <div class="interested_in_section_field_left">
                <p>Interested_in</p>
              </div>
              <div class="interested_in_section_field_right">
                <label class="radio-input">
                  <p>Surrogacy</p>
                  <input type="radio" checked="checked" name="SignupForm[type1]" value="1">
                  <span class="checkmark"></span>
                </label>
                <label class="radio-input">
                  <p>Egg</p>
                  <input type="radio" name="SignupForm[type1]" value="2">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="registration_button_main_main">
            <a href="#" class="registration_button_main_main_a">
              <p>Submit</p>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="registration_captcha_main_main">
            <script src='https://www.google.com/recaptcha/api.js'></script>
          </div>
        </div>
        <div class="col-12">
          <div class="registration_footer_main_main">
            <p>Already registered?<a href="#login-popup" class="ths-popup-link"> Click here to Login</a></p>
          </div>
        </div>
        <div class="errors1" style="color:red;"></div>
      </div>
    </form>
  </div>
</div>