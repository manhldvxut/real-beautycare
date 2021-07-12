$(document).ready(function(){
  var intViewportWidth = window.innerWidth;

  scrollAddClass();
  $(window).scroll(function () {
      scrollAddClass();

      if(window.scrollY > 80){
        $('.header__body').addClass('active')
      }else{
        $('.header__body').removeClass('active')
      }
    })

  // $('.slick-js').slick({
  //   dots: false,
  //   speed: 300,
  //   slidesToShow: 5,
  //   slidesToScroll: 2,
  //   centerMode: true,
  //   centerPadding: '160px',
  //   responsive: [
  //   	{
  //   		breakpoint: 1024,
  //   		settings: "unslick",
  //   	}
  //   ]
  // })

  // search

  $('.header__right li button').click(function(){
    $('html').css('overflow', 'hidden')
  })
  $('.btn-close, .head_modal').click(function(){
    $('html').removeAttr('style')
  })


  // smartphone
  $('.line-btn').click(function(){
    $('.header__center').addClass('active')
    $('html').css('overflow', 'hidden')
  })

  $('.close_nav').click(function(){
    $('.header__center').removeClass('active')
    $('html').removeAttr('style')
  })


  // fix height
  $('.belleza__item').matchHeight();

  menuCtrl();
})


var menuCtrl = function () {
  var wWidth = $(window).outerWidth();
  var $menuCtrl = $('.js-menuCtrl');
  if (wWidth < 769) {
    $menuCtrl.click(function () {
      console.log(1);
      $(this).find('.js-subMenu').slideToggle();
      $(this).find('.js-subMenuIcon').toggleClass('active');
    });
  }
}

function scrollAddClass(){
  $('.js-scroll-item').each(function() {
    let elemPos = $(this).offset().top;
    let scroll = $(window).scrollTop();
    let windowHeight = $(window).height();

    if ($(window).innerWidth() >= 769) {
      if (scroll > elemPos - windowHeight + 250) {
        $(this).addClass('is-shown');
      } // PC
    }else{
      if (scroll > elemPos - windowHeight + 10) {
        $(this).addClass('is-shown');
      } // Sp
    }
  });
}