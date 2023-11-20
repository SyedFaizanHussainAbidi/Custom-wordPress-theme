<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
  

  <?php
if (have_posts()) : while (have_posts()) : the_post();
   ?>

<section class="other-pages">
<div class="moving others" >
					<div class="left-shadow">
						
					</div>
				</div>
    <div class="container inners-pages">
        <div class="row rows-pages">
            <div class="col-12 banner-cols">

            <h2 class="page_name">
                 Apply
            </h2>

            <h2 class="banner_text">
                <?php echo get_field('banner_text'); ?>
            </h2>
            <h2 class="banner_details">
                <?php echo get_field('banner_details'); ?>
            </h2>

            </div>
        </div>
    </div>
</section>




<style>
.dark-mode section.row-repeater{
  background-image:url('<?php echo get_field('footer_background_dark_image', 'option'); ?>') !important;
  
}


</style>

<section class="row-repeater sng"  style="background-image:url('<?php echo get_field('footer_background_image', 'option'); ?>');">
    <div class="container rws-cnt" >
      
    <div class="row first-blog-crr-">
      <h2 class="some-main-details-head">
        <?php echo get_field('main_details__blog_head'); ?>
      </h2>
      <div class="jobs-type">
        <span class="jobs">
          <span class="tpyes">
             <i class="fa fa-clock-o"></i>
              <?php echo get_field('job_types'); ?>
          </span>
          <span class="tpyes">
          <i class="fa fa-map-marker"></i>
              <?php echo get_field('job_location'); ?>
          </span>

        </span>
      </div>
      <div class="sing-cnt">
        <?php  the_content(); ?>
      </div>
    </div>
        <div class="row cnt-cr">
          <div class="cnt-cr col-12">

        
         <?php echo do_shortcode('[contact-form-7 id="55a79e1" title="Carrier Form"]'); ?>



          </div>
        </div>  

        
    </div>

</section>


<?php
get_template_part('template_parts/bottom-faqs');
?>



<?php
get_template_part('template_parts/Reviews');
?>





<?php
endwhile; else :
    // If there are no posts to display
    echo 'No posts found.';
endif;
?>


<?php // Get the footer of the backend template (necessary for closing HTML tags).
get_footer(); ?>