
<section class="footer" id="footer" >
	

	<div class="container ftr-cnt" >
		<div class="ftr-top">
				<a href="<?php echo site_url();?>" class="ftr-logo">
					<h2 class="logos-colab">
						COLAB.<span class="hlf-lgo">AGENCY</span>
					</h2>
				</a>
		</div>
		<div class="ftr-btm">

    <div class="footer-urls">
            <?php
									wp_nav_menu( array(
										'theme_location' => 'custom-menu-location', // Replace with your menu location or name
										'menu_id'        => 'your-menu-id', // Replace with a unique ID for the menu
										'menu_class'     => 'your-menu-class', // Replace with custom classes for the menu
									) );
								?>
            </div>
            
             <div class="footer_socials">
                          <?php if( have_rows('footer_socials','option') ): ?>
                  <ul class="ftr-scl">
                  <?php while( have_rows('footer_socials','option') ): the_row(); 
                      ?>
                      <li>
                    <a target="_blank" href="<?php echo the_sub_field('footer_icon_url','option'); ?>" class="scl-lnk ftr"> <i class="fa fa-<?php echo the_sub_field('footer_icon_name','option'); ?> icons"></i></a>
                      </li>
                  <?php endwhile; ?>
                  </ul>
              <?php endif; ?>
            </div>



           
		</div>

    <div class="footer-bottom">

    <div class="footer-urls">
    <?php
wp_nav_menu(
  array(
      'theme_location' => 'custom-menus-location', // Use the menu location name
      'menu_id' => 'footer-menu', // Assign an ID for your menu (optional)
  )
);
?>
            </div>


    </div>
	</div>








</section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-angle-double-up"></i></button>


</div>

<script>

let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




</script>


<script>
    jQuery(document).ready(function($) {
	
     AOS.init( {
            offset: 300,
            duration: 800,
            easing: "ease-in-out",
            delay: 100,
        });
 


// Toggle the navbar-collapse when clicking the navbar-toggler
$(".navbar-toggler").on("click", function(e) {
$(".navbar-collapse").toggleClass("show");
});

 const $moving = $(this).find(".moving");
    const $parent = $moving.parent(); 
		$($parent).on("mousemove", function(ev) {
        const positionX = (window.innerWidth / -90 - ev.clientX) / -50 * 2;
        const positionY = -ev.clientY / 12;
        $moving.css("transform", `translate(${positionX}px, ${positionY}px)`);
      });



    });


</script>



<?php wp_footer(); ?>
</body>
</html>
