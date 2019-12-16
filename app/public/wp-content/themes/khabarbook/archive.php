<?php 
	get_header(); ?>

	<!-- Page heading -->
	<div class="container p-t-20 p-b-10">
		<h3 class="f1-l-1 cl2 m-b-10">
			<?php 
				the_archive_title();
			?>
		</h3>
	</div>

	<!-- Post -->
	<section class="bg0 p-t-0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
						<?php if (have_posts()):
								while(have_posts()) {
									the_post();
									gt_set_post_view(); ?>
								<div class="col-sm-6 p-r-25 p-r-15-sr991">
									<!-- Item latest -->	
									<div class="m-b-45">
										<a href="<?php the_permalink(); ?>" class="wrap-pic-w hov1 trans-03">
											<img src="<?php echo get_theme_file_uri('images/entertaiment-06.jpg'); ?>" alt="IMG">
										</a>

										<div class="p-t-16">
											<h5 class="p-b-5">
												<a href="<?php the_permalink(); ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
													<?php the_title(); ?> 
												</a>
											</h5>

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
												<span class="f1-s-3">
													<i class="fas fa-eye" m-r-3></i> <?= gt_get_post_view(); ?>
												</span>

											</span>
										</div>
									</div>
								</div>
					    <?php }
					    else:
					    	echo '<p class="container"> No content Found </p>';
			    		endif; ?>
					</div>

					<? if(have_posts()): ?>
						<!-- Pagination -->
						<div class="flex-wr-s-c m-rl--7 p-t-15 pagi-wrap">
							<!-- <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
							<a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a> -->
							<?php echo paginate_links(array(
								'prev_text' => '&laquo;',
								'next_text' => '&raquo;',
							)); ?>
						</div>
					<?php endif; ?>
				</div>

				<?php ad_sidebar(5); ?>
			</div>
		</div>
	</section>

<?php	get_footer();

?>