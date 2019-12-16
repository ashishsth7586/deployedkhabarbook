
(function (e) {
    "use strict";
    var n = window.TWP_JS || {};

    n.navigation = function () {
      //added arrow
      var menuId= document.getElementById("primary-menu");
      if( menuId!='' ){
        e("ul#primary-menu>li,div#primary-menu>ul>li").has('ul').addClass("down-arrow");
        e("ul#primary-menu>li>ul li,div#primary-menu>ul>li>ul li").has('ul').addClass("right-arrow");
      }
    },
   
    n.mobileMenu = function () {
        e(document).on("click","#twp-menu-icon",function(){
            e(".twp-mobile-menu-section").addClass("show");
            e("#primary-nav-menu,#primary-menu").clone().appendTo(".twp-mobile-menu");
            e(".twp-mobile-menu ul li").has('ul').addClass("down-arrow");
            // e("#overlay").toggleClass("show");
            e('body').css("overflow-y","hidden");
        })
        
        e("#twp-mobile-close").on("click",function(){
            e(".twp-mobile-menu-section").removeClass("show");
            e(".twp-mobile-menu #primary-nav-menu,.twp-mobile-menu #primary-menu").remove();
            e(".twp-mobile-menu ul li").has('ul').removeClass("down-arrow");
            e('body').css("overflow-y","scroll");
        })
    },
  
  
    
    n.minHeight = function () {
        var footerHeight = e("#colophon").outerHeight();
        var windowHeight = e(window).height();
        var contentMinHeight = windowHeight  -  footerHeight;
        if( e(window).width() > 992){
            e(".twp-min-height").css("minHeight",contentMinHeight);
        }
     }
   
  
    n.DataBackground = function () {
        var pageSection = e(".data-bg");
        pageSection.each(function (indx) {

            if (e(this).attr("data-background")) {
                e(this).css("background-image", "url(" + e(this).data("background") + ")");
            }
        });

        e('.bg-image').each(function () {
            var src = e(this).children('img').attr('src');
            e(this).css('background-image', 'url(' + src + ')').children('img').hide();
        });
    },
    n.slider = function() {
        e(".wp-block-gallery.columns-1,.gallery-columns-1,.twp-eportfolio-photography-slider").slick({
            autoplay: true,
            infinite: false,
            speed: 300,
            arrow: false,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
        e(".twp-blog-slider,.twp-widget-slider").slick({
            autoplay: true,
            infinite: false,
            speed: 300,
            arrow: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            cssEase: 'linear',
        });
        e(".twp-eportfolio-photography-slider").on('wheel', (function(e) {
            e.preventDefault();
            if (e.originalEvent.deltaY < 0) {
              $(this).slick('slickNext');
            } else {
              $(this).slick('slickPrev');
            }
        }));
    }
    n.galleryMagnificPopUp = function () {
        e('.wp-block-gallery,.gallery').each(function () {
            e(this).magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function (item) {
                        return item.el.attr('title');
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    opener: function (element) {
                        return element.find('img');
                    }
                }
            });
        });
        e('.twp-eportfolio-photography-slider').each(function () {
            e(this).magnificPopup({
                delegate: '.twp-photography-post>a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                image: {
                    verticalFit: true,
                    titleSrc: function (item) {
                        return item.el.attr('title');
                    }
                },
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    opener: function (element) {
                        return element.find('img');
                    }
                }
            });
        });
      
    },

    n.ep_masonry = function () {
        if (e(window).width() > 600) {
            if (e('.masonry-blocks').length > 0) {
                var $blocks = e('.masonry-blocks').imagesLoaded(function () {
                    $blocks.masonry({
                        itemSelector: 'article',
                    });
                });
            }
        }
          
    },
    n.galleryView = function() {
        e("#list-view").on("click",function(){
            e("#masonary-gallery").addClass('twp-full-width-post').removeClass('twp-post-with-bg-image');
            e(this).addClass('twp-active').siblings().removeClass('twp-active');
        })
        e("#grid-view").on("click",function(){
            e("#masonary-gallery").addClass('twp-post-with-bg-image').removeClass('twp-full-width-post');
            e(this).addClass('twp-active').siblings().removeClass('twp-active');
            n.ep_masonry();
        })
        
    }

    n.twp_sticky_sidebar = function () {
    //   jQuery('.widget-area').theiaStickySidebar({
        //   additionalMarginTop: 30
    //   });
    },

    e(window).on('load', function () { 
      e('#status').fadeOut(); 
      e('#preloader').delay(350).fadeOut('slow');  
      e('body').delay(350).css({ 'overflow': 'visible' });
   })

    e(document).ready(function () {
        n.DataBackground(),n.mobileMenu(),n.slider(),n.ep_masonry(),n.minHeight(),n.galleryMagnificPopUp(),n.twp_sticky_sidebar(),n.galleryView();
    }), e(window).scroll(function () {
    }),e(window).resize(function(){
        n.ep_masonry(),n.minHeight();
    })

})(jQuery);