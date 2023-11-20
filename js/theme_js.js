jQuery(document).ready(function($) {

// Counter query 



var counterRow = $(".counter-row");

// Get the parent of the parent element
var grandParent = counterRow.parent().parent();


function handleScrollAnimation() {
  if (!$("#counter").hasClass("animated")) {
    $('.count').each(function () {
      $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
      }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
          $(this).text(Math.ceil(now));
        }
      });
    });
    $("#triggered").addClass("show");
    $("#counter").addClass("animated");
  }
}

// Create an Intersection Observer
var observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      // When the grandparent's viewport intersects the viewport, run the animation
      handleScrollAnimation();
    }
  });
});

      function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
      }
      
      // Check if the grandParent element is in the viewport on scroll
      $(window).on('scroll', function () {
        if (isElementInViewport(grandParent[0])) {
          // The grandParent element is in the viewport, perform your action here
          handleScrollAnimation(); // Call your animation function
        }
      });
      
// end 

// verticalSwiping using slick slider

      var slickCarousel = $('AddCustomClass');
      slickCarousel.slick({
          dots: false,
          infinite: false,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
          vertical: true,
          verticalSwiping: true,
          dots: false,
          centerPadding: '50px',
          arrows: true,
          prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
          nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
          responsive: [{
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      infinite: true,
                  }
              }, {
                  breakpoint: 639,
                  settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                vertical: false,
                verticalSwiping: false,
                  }
              }
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
          ]
      });
      
//mouse wheel
slickCarousel.mousewheel(function(e) {
  e.preventDefault();
      if (e.deltaY < 0) {
          $(this).slick('slickNext'); 
      }
      else {
          $(this).slick('slickPrev');
      }
  });

// end 





// nav Walker js 

  $('body').on('mouseenter mouseleave', '.dropdown', function (e) {
    var dropdown = $(e.target).closest('.dropdown');
    var menu = $('.dropdown-menu', dropdown);
    dropdown.addClass('show');
    menu.addClass('show');
    setTimeout(function () {
        dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
        menu[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
    }, 300);
});


// end 
  



});


















































