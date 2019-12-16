<?php 
	get_header(); ?>

	<?php while(have_posts()) {
		the_post();
		gt_set_post_view(); ?>
	<!-- Content -->
	<section class="bg0 p-b-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<h3 class="f1-l-3 cl2 p-b-16 p-t-20 respon2">
								<?php the_title(); ?>
							</h3>
							
							<div class="flex-wr-s-s p-b-20">
								<span class="cl8">
										by <?php the_author(); 
										?>
									<span class="f1-s-3 m-rl-3">
										|
									</span>

									<span class="f1-s-3">
										<?php echo time_ago();  ?>
									</span>
									<span class="f1-s-3 m-rl-3">
										|
									</span>
									<span class="f1-s-3"><i class="fas fa-eye m-r-3"></i>
										<?= gt_get_post_view(); ?>
									</span>

								</span>
							</div>

							<div class="wrap-pic-max-w p-b-10">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
								<?php the_content(); ?>
							</p>

							<!-- Tag -->
							<div class="flex-s-s p-t-12 p-b-15">
								<span class="f1-s-12 cl5 m-r-8 m-t-11" style="font-weight: bold;">
									Categories:
								</span>
								
								<div class="flex-wr-s-s size-w-0 categories-links">
									<?php echo get_the_category_list(' ') ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<?php ad_sidebar(7); ?>


			</div>
		</div>
	</section>
	
<?php }
	get_footer();
 ?>