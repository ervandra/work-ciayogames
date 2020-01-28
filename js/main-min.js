
var $hamburgerButton = $(".hamburger");

$hamburgerButton.on("click", function(e) {
  $hamburgerButton.toggleClass("is-active");
  $('.hamburger-menu-content').toggleClass("is-active");
});

$('.hamburger-menu-content ._nav a').on("click", function(){
  $('.hamburger-menu-content').toggleClass('is-active');
  $hamburgerButton.toggleClass("is-active");
});


$('#testparallax').parallax();

// $(window).scroll(function (event) {
//     var scroll = $(window).scrollTop();
//     if (scroll >= 695) {
// 	    $('#header').addClass('_header-scrolled').removeClass('_header');
//     } else {
//     	$('#header').removeClass('_header-scrolled').addClass('_header');
//     }
// });

// Scroll Reveal

window.sr = ScrollReveal({
	delay: 100
});
sr.reveal('._content');
sr.reveal('.section-title');
sr.reveal('.services.col-6');
sr.reveal('._game-content');
sr.reveal('._character-container');
sr.reveal('.grid');


// Smooth Scrolling

$(function() {
  
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        if(this.hash.slice(1) === 'home'){
          
           
          $('html, body').animate({
              scrollTop: 0
          }, 600);
          return false
        }
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 600);
        return false;
      }
    }
  });

  /* Flickity, for scrolling / carousel The Team */

  var $gallery = $('._character-container').flickity({
    cellAlign: 'left',
    freeScroll: true,
    wrapAround: true,
    prevNextButtons: false
  });

  // previous
  var $previousButton = $('.button--previous').on( 'click', function() {
    $gallery.flickity('previous');
  });
  // next
  var $nextButton = $('.button--next').on( 'click', function() {
    $gallery.flickity('next');
  });



  /* Scrolled Header, for reduce header height on scroll */
  
  // for first time loading, detect user scroll, if scrolled add immediately the scrolled class.
  var wh = $(document).scrollTop();
  if(wh >= 200){
      $('_header').addClass('scrolled');
  }
  $(window).on('scroll', function(e){
    var wh = $(document).scrollTop();
    if(wh >= 200){
      $('body').addClass('scrolled');
    }else{
      $('body').removeClass('scrolled');
    }
    
  });
  $('#home').imagesLoaded()
  .done( function( instance ) {
    setTimeout( function(e){
    $('body').addClass('loaded');
    },1000);
  })
});


