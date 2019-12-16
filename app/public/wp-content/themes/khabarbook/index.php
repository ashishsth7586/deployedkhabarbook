<?php
	get_header(); ?>

	<?php get_template_part('template-parts/content', 'headline'); ?>
		
	<?php get_template_part('template-parts/content', 'featuredpost'); ?>

	<!-- Post -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="p-b-20">

						<?php get_template_part('template-parts/content', 'samachar'); ?>	

						<!-- Others -->
						<div class="row">

							<?php get_template_part('template-parts/content', 'desh'); ?>

							<?php get_template_part('template-parts/content', 'finance'); ?>

							<!-- Ad -->
							<div class="col-sm-12 m-b-25 flex-c-c" style="text-align: center;">
								<?
								$postAd_1 = new WP_Query(array(
									'posts_per_page' => 1,
									'post_type' => 'advertisement',
									'adcategory' => 'Post Long Banner Ad 1',
								));
								while($postAd_1->have_posts()) {
									$postAd_1->the_post(); ?>
									<a href="<?php echo get_field('ad_url'); ?>" target="_blank"><img class="max-w-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
								</a>
								<?php }

								?>
							</div>

							<?php get_template_part('template-parts/content', 'international'); ?>
							
							<?php get_template_part('template-parts/content', 'crime'); ?>
							
							<!-- Ad -->
							<div class="col-sm-12 m-b-25 flex-c-c" style="text-align: center;">
								<?
								$postAd_2 = new WP_Query(array(
									'posts_per_page' => 1,
									'post_type' => 'advertisement',
									'adcategory' => 'Post Long Banner Ad 2',
								));
								while($postAd_2->have_posts()) {
									$postAd_2->the_post(); ?>
									<a href="<?php echo get_field('ad_url'); ?>" target="_blank"><img class="max-w-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
								</a>
								<?php }

								?>
							</div>

							<?php get_template_part('template-parts/content', 'health'); ?>
							
							<?php get_template_part('template-parts/content', 'interesting') ?>

							<!-- Ad -->
							<div class="col-sm-12 m-b-25 flex-c-c" style="text-align: center;">
								<?
								$postAd_3 = new WP_Query(array(
									'posts_per_page' => 1,
									'post_type' => 'advertisement',
									'adcategory' => 'Post Long Banner Ad 3',
								));
								while($postAd_3->have_posts()) {
									$postAd_3->the_post(); ?>
									<a href="<?php echo get_field('ad_url'); ?>" target="_blank"><img class="max-w-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
								</a>
								<?php }

								?>
							</div>

							
							<?php get_template_part('template-parts/content', 'sports'); ?>
							
							<?php get_template_part('template-parts/content', 'technology'); ?>
						</div>
					</div>
				</div>				
				<?php ad_sidebar(-1); ?>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
			<?
				$postAd_4 = new WP_Query(array(
					'posts_per_page' => 1,
					'post_type' => 'advertisement',
					'adcategory' => 'Post Long Banner Ad 4',
				));
				while($postAd_4->have_posts()) {
					$postAd_4->the_post(); ?>
					<a href="<?php echo get_field('ad_url'); ?>" target="_blank"><img class="max-w-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
				</a>
			<?php }

			?>
		</div>
	</div>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-40">
		<div class="container">
			<div class="how2 how2-cl4 flex-s-c">
				<h3 class="f1-m-2 cl3 tab01-title">					
					लोकप्रिय पोष्ट
				</h3>
			</div>

			<div class="row p-t-35">
				<?php
					$latestPosts = new WP_Query(array(
						'posts_per_page' => 6,
						'meta_key' => 'post_views_count',
                		'orderby' => 'meta_value_num',
                		'date_query' => array(
						     array(
						         'after'     => '7 days ago',  // or '1 week ago'
						         'inclusive' => true,
						     ),
						 ),
					));

					if($latestPosts -> have_posts()) {
						while($latestPosts -> have_posts()) {
							$latestPosts -> the_post();
							$latestPosts -> gt_set_post_view(); ?>
							
							<div class="col-sm-6 col-md-4">
								<!-- Item latest -->	
								<div class="m-b-45">
									<a href="<?php the_permalink(); ?>" class="wrap-pic-w hov1 trans-03">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG" style="height: 248px;">
									</a>

									<div class="p-t-16">
										<h5 class="p-b-5">
											<a href="<?php the_permalink(); ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
												<?php the_title(); ?> 
											</a>
										</h5>

										<span class="cl8">
											by <?php the_author(); ?>

											<span class="f1-s-3 m-rl-3">
												|
											</span>

											<span class="f1-s-3">
												<?php echo time_ago(); ?>
											</span>
											<span class="f1-s-3 m-rl-3">
												|
											</span>
											<span class="f1-s-3"><i class="fas fa-eye m-r-3"></i>
												<?= gt_get_post_view(); ?>
											</span>
										</span>
									</div>
								</div>
							</div>

						<?php }
					} else { ?>

						<p class="p-l-20" style="text-align: center;">No news found.</p>
				<?	}
				?>
			</div>
		</div>
	</section>

	<?php get_footer();

?>