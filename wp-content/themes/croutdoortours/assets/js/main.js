;(function($){

  var $btnMenu = $('#btn-menu'),
      $menu = $('.header-menu');

  $btnMenu.on('click', function (e) {
    
      $menu.toggle();

  });
    $(".owl-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        autoplay: true,
        autoplayTimeout: 4000,
        loop: true,
        nav: true,
        navText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>']
        /*onChange : function (e) {
          console.log(e.target);
          $('.owl-item.active span').addClass('animated');
          $('.owl-item.active h1').addClass('animated');
        }*/
        /*slideSpeed : 300,
        paginationSpeed : 400,*/
        /*singleItem:true*/
    });
  $(window).scroll(function () {

          if ($(this).scrollTop() > ($('.banner').height()-$('.header').height()-350)) {
              $('.header-logo-fixed').css('opacity','0');
              
          } else {
               $('.header-logo-fixed').css('opacity','1');
              
          }
          if ($(this).scrollTop() > ($('.banner').height()-$('.header').height())) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });


 $('.featured-items-container').imagesLoaded( function(){
    $('.featured-items-container').isotope({
        itemSelector: '.featured-items-item',
        masonry: {
          columnWidth: '.grid-sizer',
        }
      });

  /*$('.featured-items-container').isotope({
            itemSelector : '.featured-items-item',
            layoutMode: 'masonry',
            //columnWidth: 100,
            //gutter: 10
            /*sortBy: 'order',
            sortAscending: true,
            getSortData: {
              order: function($elem){
                var _order = $elem.hasClass('featured-items-item') ?
                  $elem.attr('data-order'):
                  $elem.find('.order').text();
                return parseInt(_order);
              }
            }*/
       /*  });*/

   
});

    $("#content-tabs").find("[id^='tab']").hide(); // Hide all content
    $("#tabs li:first").attr("id", "current"); // Activate the first tab
    $("#content-tabs #tab-description").fadeIn(); // Show first tab's content

    $('#tabs a').click(function (e) {
        e.preventDefault();
        if ($(this).closest("li").attr("id") == "current") { //detection for current tab
            return;
        }
        else {
            $("#content-tabs").find("[id^='tab']").hide(); // Hide all content
            $("#tabs li").attr("id", ""); //Reset id's
            $(this).parent().attr("id", "current"); // Activate this
            $('#' + $(this).attr('name')).fadeIn(); // Show content for the current tab
        }
    });


    function isHome() {
        return $('body').hasClass('home');
    }
$(window).load(function() {
      $('.photos').fadeTo(1000, 1);
      $('.banner .cycle-slideshow').fadeTo(1000, 1);
      $('.loader').hide();

      if(!isHome())
      {
          $('.header').addClass("header--fixed");
          $('.header-logo-fixed').css('opacity', '0');
      }

      resize();

});


$(window).resize(resize);

function resize () {
   $('.photos-item').height($('.photos-item').find('img').height());
}


    
})(jQuery);


