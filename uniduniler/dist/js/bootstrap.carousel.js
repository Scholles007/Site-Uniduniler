/* ========================================================================
 * Bootstrap: carousel.js v3.1.1
 * https://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


// start carrousel
   $('.carousel.carousel-slider').carousel({
      fullWidth: true,
      indicators: false
   });


   // move next carousel
   $('.moveNextCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('next');
   });

   // move prev carousel
   $('.movePrevCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('prev');
   });

/*-------------------------------------*/

    $('#myCarousel2').on('slide.bs.carousel', function (e) {

      
        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 4;
        var totalItems = $('.carousel-item').length;
        
        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner2');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner2');
                }
            }
        }
    });


      $('#myCarousel2').carousel({ 
                    interval: 2000
            });


      $(document).ready(function() {
    /* show lightbox when clicking a thumbnail */
        $('a.thumb').click(function(event){
          event.preventDefault();
          var content = $('.modal-body');
          content.empty();
            var title = $(this).attr("title");
            $('.modal-title').html(title);        
            content.html($(this).html());
            $(".modal-profile").modal({show:true});
        });

      });
