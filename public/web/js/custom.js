var $ = jQuery.noConflict();

jQuery(document).ready(function($){

/*==========================*/ 
/* sliders */ 
/*==========================*/
if($('.simple-slider').length > 0){
jQuery('.simple-slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: false, 
  infinite: true, 
  centerMode: false, 
   
});
}
/*==========================*/ 
/* sliders */ 
/*==========================*/
if ($('.sub-service-slider').length > 0) {
  jQuery('.sub-service-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    centerMode: false,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  });
}



 
/*==========================*/  
/* Mobile Slider */  
/*==========================*/ 
if ($('.sub-service-slider1').length > 0) {
  jQuery('.sub-service-slider1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    infinite: true,
    centerMode: false,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false,
          adaptiveHeight: false
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: true,
          arrows: false,
          adaptiveHeight: false
        }
      },
      {
        breakpoint: 5000, // large screens
        settings: "unslick"
      }
    ]
  });
}

 

/*==========================*/  
/* Scroll on animate */  
/*==========================*/
function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
          '-webkit-animation-delay':  osAnimationDelay,
          '-moz-animation-delay':     osAnimationDelay,
          'animation-delay':          osAnimationDelay
        });
        var osTrigger = ( trigger ) ? trigger : osElement;
        osTrigger.waypoint(function() {
          osElement.addClass('animated').addClass(osAnimationClass);
          },{
              triggerOnce: true,
              offset: '95%',
        });
// osElement.removeClass('fadeInUp');
  });
}
onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container'));


/*==========================*/
/* Header fix */
/*==========================*/
var scroll = $(window).scrollTop();
if (scroll >= 10) {
    $("body").addClass("fixed");
} else {
    $("body").removeClass("fixed");
}

/*==========================*/ 
/* Testimonial slider */ 
/*==========================*/
if($('.testimonial-slider').length > 0){
    $('.testimonial-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 992, // Medium devices (tablets, less than 992px)
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768, // Small devices (landscape phones, less than 768px)
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
}

/*==========================*/
/* Stat Counter */
/*==========================*/
var counted = 0;
$(window).scroll(function() {
    var oTop = $('.stats-section').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.stat-count').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count') || $this.text().replace(/[^0-9]/g, ''); // Use data-count if available, else parse text
            $this.text('0'); // Start from 0
            $({ countNum: $this.text() }).animate({
                countNum: countTo
            },
            {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    // Check if the original text included '+' or '%'
                    var suffix = '';
                    var originalText = $this.attr('data-original-text'); // Store original text if needed elsewhere or parse directly
                    if ($this.next('p').text().includes('%') || $this.text().includes('%')) { // A bit simplified check based on initial value
                         suffix = '%';
                    } else if ($this.next('p').text().toLowerCase().includes('plus') || $this.text().includes('+')) {
                        suffix = '+';
                    }
                    
                    // Get the raw number text and clean it potentially
                    var currentNum = Math.floor(this.countNum).toString();
                    
                    // Combine number and suffix
                    $this.text(currentNum + suffix);
                },
                complete: function() {
                     // Ensure final value is accurate and includes suffix
                     var suffix = '';
                     var originalText = $this.attr('data-original-text') || $this.text(); // Use a stored attribute or re-read
                     if (originalText.includes('%')) {
                         suffix = '%';
                     } else if (originalText.includes('+')) {
                         suffix = '+';
                     }
                    $this.text(this.countNum.toString() + suffix);
                    //alert('finished');
                }
            });
        });
        counted = 1;
    }
});

});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
        $("body").addClass("fixed");
    } else {
        $("body").removeClass("fixed");
    }
});