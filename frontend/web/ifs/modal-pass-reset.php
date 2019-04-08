<?php require_once ('header.php')?>
    <div class="modal-blue-bg">
        <div class="modal-announce">
            <div class="modal-logo">
                <img src="images/logo.png" alt="" title="">
            </div>
            <div class="modal-text  text-center">
                <p>Enter your Email address below and click “Reset”. <br>
                    An email will be sent with instructions on how to reset your password.</p>
            </div>
            <form action="">
                <label for="">Email</label>
                <div class="email-input">
                    <input type="text">
                </div>
                <div class="warning-text">
                    <p><img src="images/warning.png" alt="">This email address was not found in our records. <br>
                        Please enter another email or <a href="">sign up</a>
                    </p>
                </div>
                <a href="" class="space-top-sm btn-modal">Reset</a>
            </form>
        </div>
    </div>
<?php require_once ('footer.php')?>