
var jQfairuz = jQuery.noConflict();

jQfairuz(document).ready(function ($) {
$(document).foundation()

AOS.init();

$('[data-curtain-menu-button]').click(function(){
    $('body').toggleClass('curtain-menu-open');
});
var imgs = $('.slider img');
imgs.each(function() {
    var item = $(this).closest('.item');
    item.css({
        'background-image': 'url(' + $(this).attr('src') + ')',
        'background-position': 'center',
        '-webkit-background-size': 'cover',
        'background-size': 'cover',
    });
    $(this).hide();
});

// $(function(){
//     $page = jQuery.url.attr("file");
//     if(!$page) {
//         $page = 'index.html';
//     }
//     $('#navigation li a').each(function(){
//         var $href = $(this).attr('href');
//         if ( ($href == $page) || ($href == '') ) {
//             $(this).addClass('active-by-js');
//         } else {
//             $(this).removeClass('active-by-js');
//         }
//     });
// });


// $(document).ready(function(){
//     $('ul li a').click(function(){
//       $('li a').removeClass("active-by-js");
//       $(this).addClass("active-by-js");
//   });
// });

$('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    focusOnSelect: true,
    cssEase: 'linear',
    touchMove: true,
    prevArrow: '<button class="slick-prev"> < </button>',
    nextArrow: '<button class="slick-next"> > </button>',

    //         responsive: [                        
    //             {
    //               breakpoint: 576,
    //               settings: {
    //                 centerMode: false,
    //                 variableWidth: false,
    //               }
    //             },
    //         ]
});

});




  