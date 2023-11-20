<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CO/LAB_Agency_Partner
 */
/* Template Name: Home */
get_header();
?>

	<main id="primary" class="site-main">

		
	<section class="upperBanner" >
				<div class="moving" >
					<div class="left-shadow">
						
					</div>
				</div>

		
		<section  class="inner-banner" style="background-image:url('<?php echo get_field('vd_ico_background'); ?>');">
			<div class="container bannercontainer">
				<div class="row banner-row">
					<div class="col-sm-12 col-md-7 col-lg-6 col-xl-6 left-banner-text" data-aos="fade-right" >
						<h2 class="top-banr sub-top-head">
							<?php echo get_field('top_sub_head'); ?>
						</h2>
						<h1 class="banner-main-head">
							<?php echo get_field('main_head'); ?>
						</h1>
						<p class="banner-details">
							<?php echo get_field('banner_details'); ?>
						</p>

						<div class="btns">
							<a href="<?php echo get_field('first_button_url');?>" class="bnr-btn"><?php echo get_field('first_button_text'); ?></a>

							<a href="<?php echo get_field('second_button_url');?>" class="bnr-btn"><?php echo get_field('second_button_text'); ?></a>
						</div>
					
					</div>
					<div class="col-sm-12 col-md-5 col-lg-6 col-xl-6 col-right-banner-images" data-aos="fade-left">
					<img src="<?php echo get_field('vd_ico_background'); ?>" alt="" class="vd-bg" width="100%">


					

					</div>
				</div>


				
				
						
				
			</div>
		</section>
	</section>



	<?php
get_template_part('template_parts/counters');
?>


<section class="third-sec"  data-aos="zoom-in">
<div class="moving third_sec">
					<div class="left-shadow">
						
					</div>
</div>
	<div class="container thirds-cnt">
		<div class="row third-row-one align-items-center" data-aos="fade-right">
		
			<div class="col-12 text-center">
				<h2 class="services main-sec-head">
					<?php echo get_field('main_head_sec_three'); ?>
				</h2>
				<p class="banner-details cnt-detl">
					<?php echo get_field('main_deatails_sec_three'); ?>
				</p>
			</div>

											
		</div>


	<div class="inner-third-two">
		<div class="row row-third-twos">
						<?php if (have_rows('services_reapter')) : ?>
								<?php while (have_rows('services_reapter')) : the_row(); ?>
									<div class="col-md-6 col-lg-4 col-hvr-srvs">
										<div class="iners-srv">
											<img src="<?php the_sub_field('top_srvs_image'); ?>" alt="" class="portos">
											<h2 class="title"><?php echo the_sub_field('srvs_head'); ?></h2>
											<p class="srv-title"><?php echo the_sub_field('srvs_details'); ?></p>

										</div>
								
									</div>
							<?php endwhile; ?>
						<?php endif; ?>
		</div>
	</div>

	</div>
</section>


<section class="sec-fr" data-aos="zoom-in-down">
	<div class="container fr-cnt">
			<div class="row align-items-center ror-fr-frst">
							
					<div class="col-12 text-center">
							<h2 class="services main-sec-head">
								<?php echo get_field('section_fourtop_head'); ?>
							</h2>
							<p class="banner-details cnt-detl">
								<?php echo get_field('section_four_main_head'); ?>
							</p>

							<img src="<?php echo get_field('sec_four_featured_image'); ?>" alt="" class="sec-three-featured">

					</div>

														
					</div>
			</div>
	</div>
</section>
<section class="sec-five" data-aos="zoom-out">
<div class="moving fives" >
					<div class="left-shadow">
						
					</div>
	</div>

	<div class="container five-cn">
		<div class="row five-r">
				<div class="col-12 text-center five-c">
							<h2 class="services main-sec-head">
								<?php echo get_field('main_sec_five_head'); ?>
							</h2>
							<p class="banner-details cnt-detl">
								<?php echo get_field('main_sec_five_details'); ?>
							</p>

					</div>		

		</div>
		<div class="row row-five-two">
 


		<div class="row row-five-two">
				<?php if( have_rows('faqs_boxes') ): ?>

					<?php while( have_rows('faqs_boxes') ): the_row(); ?>
					<div class="col-md-6 col-lg-4 cols-fqs-sec col-<?php echo get_row_index(); ?>">
					

					<?php
					 $outer_repeater_index = 'c-'.get_row_index();
					
					if( have_rows('faqs_columns') ): ?>


						<?php while( have_rows('faqs_columns') ): the_row();  
						 $accordion_item_class = 'e-'.get_row_index() . $outer_repeater_index;

						// Output the accordion item
						?>
						<div class="accordion accordion-flush faqs-main-boxess" id="accordionFlushExample">
								<div class="accordion-item  <?php echo $accordion_item_class; ?>">
									<h2 class="accordion-header" id="flush-heading<?php echo $accordion_item_class; ?>">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $accordion_item_class; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $accordion_item_class; ?>">
											<?php the_sub_field('faqs_box_main_head'); ?>
										</button>

									</h2>
									<div id="flush-collapse<?php echo $accordion_item_class; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo get_row_index(); ?>" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body"> 

											<div class="inner-fqs row">
												<div class="col-md-12 col-lg-6 cols-inr-fqs">
												<?php the_sub_field('faqs_box_main_details_left_side'); ?>
												</div>
												<div class="col-md-12 col-lg-6 cols-inr-fqs">
												<?php the_sub_field('faqs_box_main_details_right_side'); ?>

												</div>
											</div>

										</div>
										</div>
									</div>
						</div>
				
					<?php endwhile; ?>
					<?php endif; ?>
					</div>
					<?php endwhile; ?>
				
					<?php endif; ?>
		




	</div>
</section>



<?php
get_template_part('template_parts/digi_cols');
?>



<section class="seven" data-aos="zoom-out">
	<div class="container">
		<div class="row row-svn">
			<div class="col-md-12 col-lg-6 svn-upr-cols">
			<h2 class="main-abt svn"><?php echo get_field('main_head_sec_seven'); ?> </h2>



			</div>
			<div class="col-md-12 col-lg-6 svn-upr-cols">
					<div class="row inr">
						<div class="col-md-12 col-lg-6 cols">
						<p class="banner-details main-abt_details">
							<?php echo get_field('main_sec_seven_details'); ?>
						</p>
						</div>
						<div class="col-md-12 col-lg-6 cols">
						<a href="<?php echo get_field('sec_seven_right_button_url'); ?>" class="bnr-btn wdt"><?php echo get_field('sec_seven_right_button_text'); ?></a>

						</div>
					</div>
			</div>
		</div>

		<div class="row row-seven-two">

				<?php if( have_rows('main_columns_for_the_por_clients') ): ?>
					<ul class="cs-col">
					<?php while( have_rows('main_columns_for_the_por_clients') ): the_row(); 
					$rws_item = 'r'.get_row_index();
						?>
						<li class="list-cols <?php echo $rws_item ?>">
							
						


						<?php if( have_rows('clients_inners_columns') ): ?>
					<ul class="cs-col-inners">
					<?php while( have_rows('clients_inners_columns') ): the_row(); 
						$rws_c_item = 'C'.get_row_index();
						?>
						<li class="list-inner-cols  <?php echo $rws_c_item ?>">
							<img src="<?php the_sub_field('clients_icons'); ?>" alt="" class="dg">
							<h2 class="dg-head"><?php the_sub_field('clients_name'); ?></h2>
							<p class="dg"><?php the_sub_field('clients_details'); ?></p>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>	





						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>	

		</div>
	</div>
</section>

<?php
get_template_part('template_parts/bottom-faqs');
?>


<section class="blogs">
	<div class="container blogs">
		<div class="row blos-rw"  data-aos="fade-right">
						<div class="col-12">
							<h2 class="services main-sec-head text-center main_Blogs"><?php echo get_field('main_blog_head');?></h2>
						</div>
		
		<?php
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
);

$posts = get_posts($args);

if ($posts) :
    foreach ($posts as $post) :
		?>
		
		<div class="col-md-12 col-lg-4">
			<div class="inner-blogs">
<?php      
  setup_postdata($post);

        // Author name
        $author_name = get_the_author();

        // Published date
        $published_date = get_the_date('j F Y');
		$author_img = get_field('author_image');

        // Display post content
       
        // Featured image
        if (has_post_thumbnail()) {
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // 'full' is the image size
          
        }
		echo '<img class="blogs-img" src="' . $image_url . '">';
		echo '<h2 class="blog-title">'; the_title(); echo '</h2>';
		echo '<h2 class="blog-details">';   the_content(); echo '</h2>';
		echo'<div class="blog-btm">';
		echo'<div class="cl">';
		echo '<img class="blogs-img-authr" src="' . $author_img . '">';
		echo'</div>';

		echo'<div class="cl">';
		echo '<h2 class="blog-auther">';  echo "$author_name"; echo '</h2>';
		echo '<h2 class="blog-date">';   echo "$published_date"; echo '</h2>';
		echo'</div>';
		echo'</div>';


		


		


      
		?>	</div> </div><?php
    endforeach;
	


    wp_reset_postdata();
else :
    // No posts found
endif;


?>
		</div>

		
	</div>

	

</section>



	</main><!-- #main -->


<?php
get_footer();
?>




