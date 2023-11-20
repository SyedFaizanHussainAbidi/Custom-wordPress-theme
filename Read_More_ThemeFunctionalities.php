<!-- 
Counter Sec Html and js , this is a complete guide how its work. their js check "counter-row" and get the parent to parent section and run their counter numbers when its sec com in viewport !
in this i set many setting like which type of number you write like "100 k", "10 + " etc i also their their before tag like "$25"  so just used this a s per the loop and make their acf . Thanks!
 -->



<div class="row counter-row align-items-center justify-content-left">
										<?php if( have_rows('counters',6) ): ?>
											<?php while( have_rows('counters',6) ): the_row();  ?>

											<div class="col-sm-6 col-md-6 col-lg-6 cols_counter"  >

													<div class="cntrs">
														<div class="counter-box colored">
														<section id="counter">
											<div id="talkbubble">
											<span class="djts"><?php the_sub_field('before_syns',6); ?></span> <span class="count"><?php the_sub_field('numbers',6); ?></span><span class="djts"><?php the_sub_field('syns',6); ?> </span>
											</div>
											</section>
															<p class="banner-details cnt-detl"><?php the_sub_field('counter_details',6); ?></p>
														</div>
													</div>
											</div>
										<?php endwhile; ?>

										<?php endif; ?>
</div>





<script>


//Jquery for the counter required 


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
      


</script>








<!-- if you need a vertical carousel with work as scroll so used this html and script  -->

<!-- this is the main class  -->
<div class="slider-vertical"> 
<!-- end  -->

<?php if( have_rows('section_animated') ): ?>
    <?php while( have_rows('section_animated') ): the_row(); 
        ?>
        <div class="inners">
        <div class="container">

      <div class="row abt-rw">
            <div class="col-sm-12 col-md-12 col-lg-6 cols-abt-l">
            <h2 class="reapter-head"> 
                <?php echo get_sub_field('sec_two_main_head'); ?>
            </h2>
            <p class="repeater_details">
                <?php echo get_sub_field('sec_two_main_details'); ?>
            </p>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 cols-abt-r">
                <?php 
$image =  get_sub_field('sec_two_main_right_image');
if( !empty( $image ) ): ?>
    <img class="abt-rght" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>


 </div>


      




<script>


    var slickCarousel = $('slider-vertical');
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

// Set their responsive items as per your layout 



</script>




<!-- if you need a ajax function in any page to view a more blog using ajax so used this in a script same page  -->


  
<script>
jQuery(document).ready(function ($) {

    var page = 2; // Initialize the page number for pagination

    $('#load-more-button').on('click', function () {
        $.ajax({
            url: ajaxurl,
            type: 'POST',
            data: {
                action: 'load_more_posts',
                page: page,
            },
            success: function (response) {
                $('#projects-container .row-project').append(response); // Append new posts
                page++; // Increment the page number
                
            },
        });
    });


});





</script>



<!-- function query  // and plase this query in function and set this layout as per ypour layout 


-->


<?php


	function load_more_posts() {
	
		$page = $_POST['page'];
		$args = array(
			'post_type'      => 'our_project',
			'posts_per_page' => 10,
			'order'          => 'ASC',
			'paged'          => $page,
		);
	
		$query = new WP_Query($args);
	
		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
			?>
				<div class="projects-inner col-sm-12 col-md-6 col-lg-4">
					<div class="prjects-inners">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="featured-projects">
						<div class="inner-work">
                                <h2 class="projects_head">
                                    <?php the_title(); ?>
                                </h2>
                                <h2 class="work-details">
                                <?php the_content(); ?>

                                </h2>
                                <a href="<?php echo get_permalink(); ?>" class="pro_url">VIEW PROJECT</a>
                           
                           </div>
					</div>
				</div>
			<?php
			endwhile;
		endif;
	
		wp_reset_postdata();
	
		die();
	}
	
	add_action('wp_ajax_load_more_posts', 'load_more_posts');
	add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
	
  ?>



// end 


