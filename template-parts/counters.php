	
    <section class="second" >
		
		<div class="container second">
			<div class="row row-sec-2">
				<div class="col-md-12 col-lg-6 cols">
						<h2 class="main-abt"><?php echo get_field('about_main_head_right_side',6); ?></h2>

						<p class="banner-details main-abt_details"><?php echo get_field('about_main_details',6); ?></p>
				</div>
				<div class="col-md-12 col-lg-6 cols">
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
				</div>
			</div>
		</div>
	</section>

