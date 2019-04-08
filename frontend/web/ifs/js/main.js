// bauka scripts

// sf menu
$(document).ready(function () {
  $('ul.sf-menu').superfish({
    pathClass: 'current',
    cssArrows: false,
    delay: '200',
    animation: { opacity: 'show', height: 'show' },
    speed: '70',
    autoArrows: false,
    dropShadows: false,
  });
});
// end sf menu


// login sign up popup
$(function () {
  $('.ths-popup-link').on('click', function (e) {
    e.preventDefault();
    var thsAttr = $(this).attr('href');
    $('.ths-modal-popup').hide();
    $(thsAttr).show();
  });

  $('.modal-close').on('click', function() {
    $(this).closest('.ths-modal-popup').hide();
  });
})
// end login sign up popup


$(document).ready(function () {
  // personal weight
  $(".personal-weight-item input").on("change paste keyup", function () {
    var id = $(this).val();
    $('.personal-weight-item input').val(id);
  });
  // end personal weight

  // personal weight
  $(".personal-height-item input").on("change paste keyup", function () {
    var id = $(this).val();
    $('.personal-height-item input').val(id);
  });
  // end personal weight
});



// main-slide owl
$(document).ready(function () {
  var owlMain = $('.main-slide-wrap');

  owlMain.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    mouseDrag: false,
    nav: false
  });

  $('.arrow-next').click(function (e) {
    e.preventDefault();
    owlMain.trigger('next.owl.carousel');
  })
  // Go to the previous item
  $('.arrow-prev').click(function (e) {
    e.preventDefault();
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owlMain.trigger('prev.owl.carousel', [300]);
  })

});
// end main-slide owl


// hamburger btn
$(document).ready(function () {
  $('.mobile-menu').hide();
  $('.hamburger').click(function () {
    $(this).toggleClass('is-active');
    $(this).parent().toggleClass('hamburger-wrap-active');
    $(this).find('.line').toggleClass('line-active');
    $('.mobile-menu').slideToggle();
  });
});
// end hamburger btn 





// header desktop search
$(document).ready(function () {

  $('.search').find('a').on('click', function (e) {
    e.preventDefault();
    var searchAttr = $(this).attr('href');
    $(searchAttr).slideDown(300);

    $(document).mouseup(function (e) {
      var div = $("#search-desktop-active");
      if (!div.is(e.target)
        && div.has(e.target).length === 0) {
        div.slideUp(300);
      }
    });
  });

});
// end header desktop search

// mobile-right-menu-btn 
$(document).ready(function () {

  $('.mobile-right-menu-btn-wrap').on('click', function (e) {
    e.preventDefault();
    $(this).parent().toggleClass('mobile-right-menu-btn-active');
    $('.mobile-log-in').toggleClass('mobile-login-active');
  });

  $('.mobile-right-menu-items').find('a').on('click', function (e) {
    e.preventDefault();

    var items = $(this).attr('href');

    $('.i-active').not($(items)).slideUp();
    $(items).slideToggle(300);

  })

});
// end mobile-right-menu-btn 


// differences tabs
$(document).ready(function ($) {
  $('.differences-bottom div').hide();
  $('.differences-bottom div:first').show();
  $('.differences-top div a:first').addClass('differences-active');
  $('.differences-top div').click(function (event) {
    event.preventDefault()
    $('.differences-top div a').removeClass('differences-active');
    $(this).find('a').addClass('differences-active');
    $('.differences-bottom div').hide();

    var selectTab = $(this).find('a').attr("href");

    $(selectTab).fadeIn();
  });
});
// end differences tabs


// medical slide owl
$(document).ready(function () {
  var medicalOwl = $('.medical-team-slide')
  medicalOwl.owlCarousel({
    items: 5,
    loop: true,
    autoWidth: true
  });

  $('.medical-arrow-right').click(function (e) {
    e.preventDefault();
    medicalOwl.trigger('next.owl.carousel');
  })

  // Go to the previous item
  $('.medical-arrow-left').click(function (e) {
    e.preventDefault();
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    medicalOwl.trigger('prev.owl.carousel', [300]);
  })
});
// end medical slide owl


// team owl
$(document).ready(function () {
  var teamOwl = $('.team-slide')
  teamOwl.owlCarousel({
    items: 5,
    loop: true,
    autoWidth: true
  });

  $('.team-arrow-right').click(function (e) {
    e.preventDefault();
    teamOwl.trigger('next.owl.carousel');
  })

  // Go to the previous item
  $('.team-arrow-left').click(function (e) {
    e.preventDefault();
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    teamOwl.trigger('prev.owl.carousel', [300]);
  })
});
// end team owl



// search scripts
$(document).ready(function () {

  var $searchTrigger = $('[data-ic-class="search-trigger"]'),
    $searchInput = $('[data-ic-class="search-input"]'),
    $searchClear = $('[data-ic-class="search-clear"]');
  $searchTrigger.click(function () {
    var $this = $('[data-ic-class="search-trigger"]');
    $this.addClass('active');
    $searchInput.focus();
  });

  $searchInput.blur(function () {
    if ($searchInput.val().length > 0) {

      return false;

    } else {
      $searchTrigger.removeClass('active');
    }
  });

  $searchClear.click(function () {
    $searchInput.val('');
  });

  $searchInput.focus(function () {
    $searchTrigger.addClass('active');
  });

});
// end search scripts

// personal collapse
$(function () {
  var title = $('.personal-right-accordion').find('.personal-title');
  var wrap = $('.personal-right-accordion').find('.personal-right-accordion-wrap');

  wrap.hide();
  title.on('click', function () {
    $(this).next('.personal-right-accordion-wrap').slideToggle();
    $(this).toggleClass('personal-title-active');
  })
});
// end personal collapse


// ifs inner content mobile owl
$(function () {
  var owl = $('.inner-content-mobile');
  owl.owlCarousel({
    items: 1
  });
});
// end ifs inner content mobile owl


// services mobile owl
$(function () {
  var owl = $('.services-mobile-wrap');
  owl.owlCarousel({
    items: 1
  });
});
// end services mobile owl

// biotransportation facts content mobile
$(function () {
  var owl = $('.biotransportation-facts-content-mobile');

  owl.owlCarousel({
    items: 1,
    dots: true,
  });
});
// end biotransportation facts content mobile
// end bauka scripts



// aidos scripts

$(document).ready(function () {

  $('.aniimated-thumbnials').lightGallery({
    thumbnail: true,
    animateThumb: false,
    showThumbByDefault: false
  });
  $('.video-gallery').lightGallery();
});
$(document).ready(function () {
  $(".lightgallery").lightGallery();
});
$(document).ready(function () {
  $(".collapse-text").on('click', function () {
    $(this).find(".collapse-arrow").toggleClass("rotate-img");
  });
});

$(document).ready(function () {

  // surrogate owl
  $('.owl-surrogate').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  })
  $('.mobile-owl').owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    dotsEach: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,

      },
      600: {
        items: 1,
        nav: false
      },

    }

  })

});

// trip img gallery
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionTwo(imgs) {
  var expandImg = document.getElementById("expandedImg2");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionThree(imgs) {
  var expandImg = document.getElementById("expandedImg3");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionFour(imgs) {
  var expandImg = document.getElementById("expandedImg4");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionFive(imgs) {
  var expandImg = document.getElementById("expandedImg5");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionSix(imgs) {
  var expandImg = document.getElementById("expandedImg6");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}
function myFunctionSeven(imgs) {
  var expandImg = document.getElementById("expandedImg7");
  expandImg.src = imgs.src;
  expandImg.parentElement.style.display = "block";
}

// end aidos scripts


// sanzhar scripts

$(document).ready(function () {
  var process = $('.process');
  var surrogacyCosts = $('.surrogacy-costs-mob');
  var photos = $('.egg-donor-xzoom-photos');

  process.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    mouseDrag: true,
    nav: false
  });

  surrogacyCosts.owlCarousel({
    items: 1,
    loop: true,
    nav: false,
    dots: true,
    mouseDrag: true,
    nav: false
  });

  photos.owlCarousel({
    items: 3,
    loop: true,
    nav: true,
    dots: false,
    mouseDrag: true,
    navText: ["<img src='../images/nav-prev.png'>", "<img src='../images/nav-next.png'>"]
  });

});

$('.xzoom, .xzoom-gallery').xzoom({ position: 'lens', lensShape: 'circle', bg: true, sourceClass: 'xzoom-hidden' });



$(document).ready(function () {

  $('ul.tabs li').click(function () {
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_id).addClass('current');
  })

})


$(document).ready(function () {
  $("#file").change(function (e) {
    var img = e.target.files[0];

    if (!iEdit.open(img, true, function (res) {
      $("#result").attr("src", res);
    })) {
      alert("Whoops! That is not an image!");
    }

  });
});

// end sanzhar scripts