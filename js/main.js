

            
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

    //make menus dropdown automaticaly
    $('ul.nav li.dropdown').hover(function(){
        $('.dropdown-menu', this).fadeIn();
    }, function(){
        $('.dropdown-menu', this).fadeOut('slow');
    });//hover


  //page scroll///////////////////////////
  
  //Initialize header hight from the top
  var headerHeight = 80;
  $('a.page-scroll').click(function(e){
    e.preventDefault();
    var linkhref = $(this).attr('href');
    //console.log(headerHeight);
    //console.log($(linkhref).offset().top);
    $('html, body').animate({
      scrollTop:$(linkhref).offset().top - headerHeight
    },1500, 'easeInOutExpo');
  });


// Add active class to the menu dynamically
    // $('ul li a').click(function(){ 
    //   $('li a').removeClass("active"); 
    //   $(this).addClass("active"); });


});
