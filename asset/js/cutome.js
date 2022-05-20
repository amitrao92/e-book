$('.banner_sliders').slick({
    arrows: false,
     infinite: true,
     autoplay: true,
      autoplaySpeed: 2000,
     slidesToShow: 1,
     slidesToScroll: 1
   });


   $('.client-monial-wrap').slick({
    centerMode: true,
    dots:true,
    centerPadding: '390px',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '300px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1200,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '200px',
          slidesToShow: 1
        }
      },
      
      {
        breakpoint: 992,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '70px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });

  $(window).on("load scroll", function () {
    "use strict";
    $(".wow").css("animation-play-state", "paused");
    $(".wow").each(function () {
      if (!($(this).data("wow-duration"))) {
        $(this).data("wow-duration", "3s");
      }
      if ($(this).data("wow-offset") + $(this).offset().top <= $(window).scrollTop() + $(window).height() || (!($(this).data("wow-offset")) && $(this).offset().top <= $(window).scrollTop() + $(window).height())) {
        $(this).css("animation-play-state", "running ");
        $(this).css({
          "animationDuration": $(this).data("wow-duration"),
          "animationDelay": $(this).data("wow-delay"),
          "animationIterationCount": $(this).data("wow-iteration")
        });
      }
    });
  });
   