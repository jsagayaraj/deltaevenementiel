

            
  //sticky navigation on top scroll
  $(document).ready(function(){

    new WOW().init(); // initialize wow js

    baguetteBox.run('.tz-gallery');// initialize baguetteBox js for gallary

    //scrool sticky nav on top ////////////////
    // var navOffset = $("nav").offset().top;
    // $("nav").wrap('<div class="nav-placeholder"></div>');
    // $(".nav-placeholder").height($("nav").outerHeight());
    // $(window).scroll(function(){
    //   var scrollPos = $(window).scrollTop();
    //   if(scrollPos >= navOffset){
    //     $("nav").addClass("navbar-fixed-top");
    //   }else{
    //     $("nav").removeClass("navbar-fixed-top");
    //   }
    // });

    //End scrool sticky nav on top /////////////////////


  //page scroll///////////////////////////
  (function () {
        $('a.page-scroll').on('click', function (e) {
            e.preventDefault();
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop : $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
        });
    }());


// Add active class to the menu dynamically
    // $('ul li a').click(function(){ 
    //   $('li a').removeClass("active"); 
    //   $(this).addClass("active"); });


});
