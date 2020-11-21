
$('.conten').slick({
  dots: false,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: true,
  slidesToShow: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1025,
      arrows: false,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

