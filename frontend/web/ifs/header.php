<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>IFS</title>
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link rel="stylesheet" href="css/superfish.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/iEdit.min.css">
  <link rel="stylesheet" href="css/xzoom.css">
  <script src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

  <!-- preloader -->
  <script type="text/javascript">
    $(function () {
      $("#transition-loader").fadeOut("slow");
    });
  </script>

  <div class="transition-loader" id="transition-loader">
    <div class="transition-loader-inner">
      <label></label>
      <label></label>
      <label></label>
      <label></label>
      <label></label>
      <label></label>
    </div>
  </div>
  <!-- end preloader -->

  <?php require_once('modal-login.php');?>

  <?php require_once('modal-tyfregistr.php');?>

  <?php require_once('registration-form.php')?>

  <?php require_once('modal-get-a-consultation.php')?>

  <?php require_once('modal-contact-ifs-form.php')?>

  <?php require_once('registration-email.php')?>
  


  <!-- header -->
  <header>

    <!-- MOBILE MENU -->
    <div class="mobile-menu">
      <ul class="first-menu">
        <li><a href="ifs.php">IFS</a></li>
        <li><a href="parents.php">Parents</a></li>
        <li><a href="surrogacy.php">Surrogacy</a></li>
        <li><a href="egg-donation.php">Egg Donation</a></li>
        <li><a href="biotransportation.php">Biotransportation</a> </li>
        <li><a href="surrogate.php">Surrogate</a></li>
        <li><a href="egg-donor.php">Egg Donor</a></li>
        <li><a href="#">Database</a></li>
        <li><a href="#">More</a></li>
      </ul>

      <ul class="second-menu">
        <li><a href="#">News &amp; Events</a></li>
        <li><a href="#">Photo</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
    <!-- END MOBILE MENU -->

    <div class="container">

      <!-- mobile-right-menu-items blocks -->
      <div class="phone-active i-active" id="phone-active">+7 702 1725689</div>

      <div class="search-active i-active" id="search-active">
        <input type="text">
        <button>
          <img src="images/search.svg" alt="search">
        </button>
      </div>
      <!-- end mobile-right-menu-items blocks -->

      <div class="cap">

        <div class="cap-left">

          <div class="logo">
            <a href="index.php"><img src="images/logo.svg" alt="logo"></a>
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
              <li>
                <a href="ifs.php">IFS</a>
                <ul class="submenu-sub">
                  <li><a href="ifs.php#about-us">About us</a></li>
                  <li><a href="ifs.php#our-services">Our Services</a></li>
                  <li><a href="ifs.php#our-differences">Our Differences</a></li>
                  <li><a href="ifs.php#our-medical-team">Our Medical Team</a></li>
                  <li><a href="ifs.php#our-team">Our Team</a></li>
                  <li><a href="ifs.php#ifs-contacts">Contacts</a></li>
                </ul>
              </li>
              <li>
                <a href="parents.php">Parents</a>
                <ul class="submenu-sub">
                  <li><a href="parents.php#how-it-all-works">How It All Works</a></li>
                  <li><a href="parents.php#programs">Programs</a></li>
                  <li><a href="parents.php#benefits">Benefits</a></li>
                  <li><a href="parents.php#why-kazakhstan">Why Kazakhstan</a></li>
                  <li><a href="trip-to-almaty.php">Your Trip to Almaty</a></li>
                  <li><a href="parents.php#leading-doctors">Our Leading Doctors</a></li>
                  <li><a href="parents.php#surrogacy-laws">Surrogacy Laws</a></li>
                  <li><a href="parents.php#stories-testimonials">Stories &amp; Testimonials</a></li>
                  <li><a href="parents.php#faq">FAQ</a></li>
                  <li><a href="parents.php#how-to-start">How to Start</a></li>
                </ul>
              </li>
              <li>
                <a href="surrogacy.php">Surrogacy</a>
                <ul class="submenu-sub">
                  <li><a href="surrogacy.php#surrogacy-programs">Programs</a></li>
                  <li><a href="surrogacy.php#surrogacy-process">The Process</a></li>
                  <li><a href="surrogacy.php#surrogacy-costs">Costs</a></li>
                  <li><a href="surrogacy.php#surrogacy-school-for-surrogates">School for Surrogates</a></li>
                  <li><a href="surrogacy.php#surrogacy-doula-services">Doula Services</a></li>
                </ul>
              </li>
              <li>
                <a href="egg-donation.php">Egg Donation</a>
                <ul class="submenu-sub">
                  <li><a href="egg-donation.php#egg-donation-programs">Programs</a></li>
                  <li><a href="egg-donation.php#egg-donation-how-to-start">How to start</a></li>
                  <li><a href="egg-donation.php#egg-donation-costs">Costs</a></li>
                </ul>
              </li>
              <li>
                <a href="biotransportation.php">Biotransportation</a>
                <ul class="submenu-sub">
                  <li><a href="biotransportation.php#biotransportation-transportation">Biomaterial Transportation</a></li>
                  <li><a href="biotransportation.php#biotransportation-process">The Process</a></li>
                  <li><a href="biotransportation.php#biotransportation-costs">Costs</a></li>
                </ul>
              </li>
              <li>
                <a href="surrogate.php">Surrogate</a>
                <ul class="submenu-sub">
                  <li><a href="surrogate.php#surrogate-how-it-works">How It All Works</a></li>
                  <li><a href="surrogate.php#surrogate-about">About Surrogacy</a></li>
                  <li><a href="surrogate.php#surrogate-benefit">Benefits for Surrogate</a></li>
                  <li><a href="surrogate.php#surrogate-requirements">Surrogate Requirements</a></li>
                  <li><a href="surrogate.php#surrogate-foreign">For Foreign Surrogates</a></li>
                  <li><a href="surrogate.php#surrogate-stages">Surrogacy Stages</a></li>
                  <li><a href="surrogate.php#surrogate-compensation">Compensation</a></li>
                  <li><a href="surrogate.php#surrogate-school">School for Surrogates</a></li>
                  <li><a href="surrogate.php#surrogate-doula">Doula Services</a></li>
                  <li><a href="surrogate.php#surrogate-psychological">Psychological and Legal Support</a></li>
                  <li><a href="surrogate.php#surrogate-stories">Stories &amp; Testimonials</a></li>
                  <li><a href="surrogate.php#surrogate-faq">Surrogate’s FAQ</a></li>
                  <li><a href="surrogate.php#surrogate-how-to-start">How to Start</a></li>
                </ul>
              </li>
              <li>
                <a href="egg-donor.php">Egg Donor</a>
                <ul class="submenu-sub">
                  <li><a href="egg-donor.php#egg-donor-how-it-works">How It All Works</a></li>
                  <li><a href="egg-donor.php#egg-donor-about">About Egg Donation</a></li>
                  <li><a href="egg-donor.php#egg-donor-benefits">Benefits for Egg Donor</a></li>
                  <li><a href="egg-donor.php#egg-donor-requirements">Egg Donor Requirements</a></li>
                  <li><a href="egg-donor.php#egg-donor-foreign">For Foreign Egg Donors</a></li>
                  <li><a href="egg-donor.php#egg-donor-process">The Process</a></li>
                  <li><a href="egg-donor.php#egg-donor-compensation">Compensation</a></li>
                  <li><a href="egg-donor.php#egg-donor-stories">Stories &amp; Testimonials</a></li>
                  <li><a href="egg-donor.php#egg-donor-faq">Egg Donor’s FAQ</a></li>
                  <li><a href="egg-donor.php#egg-donor-how-to-start">How to Start</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Database</a>
                <ul class="submenu-sub">
                  <li><a href="surrogate-database.php">Surrogate Database</a></li>
                  <li><a href="egg-donor-database.php">Egg Donor Database</a></li>
                  <li><a href="#">Intended Parent Database</a></li>
                </ul>
              </li>
              <li class="link-more">
                <a href="#">More</a>
                <ul class="submenu-sub">
                  <li><a href="#">News &amp; Events</a></li>
                  <li><a href="#">Photo</a></li>
                  <li><a href="#">Video</a></li>
                  <li><a href="#">Articles</a></li>
                  <li><a href="#">Site Map</a></li>
                </ul>
              </li>
            </ul>

          </nav>

        </div>

        <div class="cap-right">

          <!-- MOBILE CABINET -->
          <div class="mobile-log-in">
            <a href="#">
              <img src="images/rectangle-arrow.svg" alt="cabinet">
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

              <select class="select-location" name="" id="">
                <option value="">kz</option>
                <option value="">ru</option>
                <option value="">en</option>
                <option value="">fr</option>
              </select>

              <select name="" id="">
                <option value="">RU</option>
                <option value="">KZ</option>
                <option value="">FR</option>
                <option value="">IT</option>
                <option value="">EN</option>
              </select>

            </div>

          </div>
          <!-- END MOBILE RIGHT MENU BTN -->

          <div class="search">

            <a href="#search-desktop-active">
              <img src="images/search.svg" alt="search">
            </a>

            <div class="search-desktop-active i-desktop-active" id="search-desktop-active">
              <input type="text">
              <button>
                <img src="images/search.svg" alt="search">
              </button>
            </div>

          </div>

          <div class="phone-wrap">
            <div class="phone">
              <img src="images/phone.svg" alt="phone">
              <span>+7 702 1725689</span>
            </div>

            <div class="skype">
              <img src="images/skype.png" alt="skype">
              <span>ifsglobal</span>
            </div>
          </div>

          <div class="register-btns">
            <a class="sign-up ths-popup-link" href="#sign-up-popup">Sign up</a>
            <a class="login ths-popup-link" href="#login-popup">Login</a>
          </div>

          <div class="lang-loc">
            <select name="" id="">
              <option value="">RU</option>
              <option value="">KZ</option>
              <option value="">FR</option>
              <option value="">IT</option>
              <option value="">EN</option>
            </select>

            <div class="location">
              <img src="images/location.svg" alt="location">
              <select name="" id="">
                <option value="#">Kazakhstan</option>
                <option value="#">Russia</option>
                <option value="#">United States</option>
              </select>
            </div>
          </div>

        </div>

      </div>

    </div>

  </header>
  <!-- end header -->