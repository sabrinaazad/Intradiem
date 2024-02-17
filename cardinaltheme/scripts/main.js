/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".section--faqs .question");
var tabContent = $(".tabcontent");
var tabContentTwo = $(".tab-content");

$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }
  });

  $(document).ready(function () {
    $(function ($) {
      "use strict";

      var counterUp = window.counterUp["default"]; 

      var $counters = $(".section--statistics .number");

      $counters.each(function (ignore, counter) {
        var waypoint = new Waypoint({
          element: $(this),
          handler: function () {
            counterUp(counter, {
              duration: 1000,
              delay: 16,
            });
            this.destroy();
          },
          offset: "bottom-in-view",
        });
      });
    });
  });

  $(".team-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team-slider-2",
  });
  $(".team-slider-2").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".team-slider",
    arrows: false,
    dots: true,
    centerMode: true,
    focusOnSelect: true,
  });
  $(".testimonials-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
    slidesPerRow: 1,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 1,
          rows: 1,
        },
      },
    ],
  });
  $(".blogs-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".events-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".events-slider-past").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".tiles-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".customer-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });
  $(".panels-slider").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".four-panels-v2").slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });
  $(".logo_slider").slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 4,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
    ],
  });
  
  function validateEmail(email) {
    var re =
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  function convertToCurrency(num) {
    var symbol = "$";

    var returnCurr = 0;

    if (typeof num != "number") {
      returnCurr = parseInt(num);
    }

    returnCurr = num.toFixed(2);

    var preCommaStr = symbol + returnCurr;

    return preCommaStr.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  $(document).ready(function () {

    var SAVE_CONST = 83.2;

    var annualSavingsField = $("#annual_savings");

    $("#calc-email").on("change", function () {
      var corpEmailField = $("#calc-email");
      var emailAddress = corpEmailField.val();

      if (validateEmail(emailAddress)) {
        corpEmailField.css("box-shadow", "grey 0 1px 3px 0");
        $("#annual_savings_field").show();
        $("#email_err").hide();
      } else {
        corpEmailField.css("box-shadow", "red 0 1px 3px 0");
        $("#annual_savings_field").hide();
        $("#email_err").show();
      }
    });

    $("#calc_savings_button").on("click", function () {
      $("#agents_err").hide();
      $("#rate_err").hide();
      var numSeats = $("#number_of_seats").val();
      var hourlyRate = $("#agent_hourly_rate").val();

      if (!numSeats || numSeats == "" || isNaN(numSeats)) {
        $("#agents_err").show();
        return;
      }
      if (!hourlyRate || hourlyRate == "" || isNaN(hourlyRate)) {
        $("#rate_err").show();
        return;
      }
      numSeats = parseFloat(numSeats);
      hourlyRate = parseFloat(hourlyRate);

      var totalSavings = numSeats * hourlyRate * SAVE_CONST;
      console.log("totalSavings", totalSavings);

      totalSavings = convertToCurrency(totalSavings);
      console.log("totalSavings parsed", totalSavings);

      annualSavingsField.val(totalSavings);

      window.dataLayer = window.dataLayer || [];

      window.dataLayer.push({
        event: "calculator",

        status: "submit",

        seats: numSeats,

        agent_hourly: hourlyRate,

        savings: totalSavings,
      });

      $("#calc_savings_button").fadeOut("fast", function () {});
      $("#savings_wrapper").fadeIn("slow", function () {});
      $("#Estimated_Annual_Savings").fadeIn("slow", function () {});
      $("#submit_button").fadeIn("slow", function () {});
    });

    $("#recaptcha_intradiem_form").on("submit", function (event) {
      $("#email_err").hide();
      $("#recp_err").hide();

      var emailValue = $("#email").val();

      if (!emailValue || emailValue == "") {
        $("#email_err").show();
        event.preventDefault();
        return;
      }

      var recaptcha = grecaptcha.getResponse();
      if (recaptcha === "") {
        $("#recp_err").show();
        event.preventDefault();
      }
    });
  });

  
});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}

function openTab(evt, tabName) {
  const windowWidth = window.innerWidth;
  if (windowWidth > 767) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  
    question.removeClass("expanded");
    question.find("#button").removeClass("expanded");
    question.find(".answer").slideUp();
    question.parent().siblings().removeClass("expanded");
    question.parent().siblings().find("#button").removeClass("expanded");
    question.parent().siblings().find(".answer").slideUp();
 }
}

function openATab(event, tabLabel) {
  var i, content, link;
  content = document.getElementsByClassName("tab-content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  link = document.getElementsByClassName("tab-links");
  for (i = 0; i < link.length; i++) {
    link[i].className = link[i].className.replace(" active", "");
  }
  document.getElementById(tabLabel).style.display = "block";
  event.currentTarget.className += " active";
}



$(document).ready(function() {
  if (tabContent.length > 0){
    document.getElementById("tablinks0").click();
    tabContent.first().trigger( "click" );
  }
  if (tabContentTwo.length > 0){
    document.getElementById("tabLink0").click();
    tabContentTwo.first().trigger( "click" );
  }
});


question.click(function () {
  $(this).parent().siblings().find(".question").removeClass("expanded");
  $(this).parent().siblings().find("#button").removeClass("expanded");
  $(this).parent().siblings().find(".answer").slideUp();
  $(this).parent().siblings().removeClass("expanded");
  $(this).toggleClass("expanded");
  $(this).parent().toggleClass("expanded");
  $(this).parent().find("#button").toggleClass("expanded");
  $(this).parent().find(".answer").slideToggle();
});


tabContent.click(function () {
  const windowWidth = window.innerWidth;
      if (windowWidth < 766) {
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
        $(this).siblings().find('.faq-wrapper').removeClass("active");
        $(this).find('.faq-wrapper').addClass("active");
      }
});

