$(document).ready(function(){
  
  var $grid = $('.sw-animation').isotope({
    // options
  });
  // filter items on button click
  $('.sw-btn').on( 'click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  $(".sw-btn").on('click', 'li', function(){
    $(this).addClass('ani-active').siblings().removeClass('ani-active');
  })


  // wow js 
    new WOW().init();



  //  typed-js 
    var typed = new Typed('#nh-naim', {
        strings: ["NH NAIM","web designer.", "web developer", "wordpress developer"],
      
        loop :true,
        typeSpeed: 80,
        backSpeed: 80,
        // bindInputFocusEvents: true,
      
      

        
      });



    //  barfiller siklls 

    $('#sbar-1').barfiller();
    $('#sbar-2').barfiller();
    $('#sbar-3').barfiller();
    $('#sbar-4').barfiller();
     
           
  // carousel 

  $('.owl-carousel').owlCarousel({
    loop:true,
    nav:true,
    center: true,
    navText:['<i class="fas fa-caret-left"></i>', '<i class="fas fa-caret-right"></i>'],
    dots: false,
    autoplay: true,
    autoplayTimeout: 2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});


$('.count').counterUp({
  delay: 20,
  time: 2000
});

});




