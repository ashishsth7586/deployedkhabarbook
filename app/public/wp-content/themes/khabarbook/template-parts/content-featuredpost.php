<!-- Feature post -->
<section class="bg0">
	<div class="container">
		<div class="row m-rl--1">

			<?php 
				$featuredPosts = new WP_Query(array(
					'posts_per_page' => 6,	
				));

				if($featuredPosts->have_posts()) {
					while($featuredPosts->have_posts()) {
						$featuredPosts->the_post(); ?>
						<div class="col-sm-6 col-lg-4 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-12 how1 pos-relative" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
								<a href="<?php the_permalink(); ?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-11">
									<div class="featured-cat-links">
										<?php echo get_the_category_list(' '); ?>
										
									</div>
									<h3 class="how1-child2 m-t-10">
										<a style="font-size: 22px; line-height: 21px; font-weight: bold;" href="<?php the_permalink(); ?>" class="f1-m-1 cl0 hov-cl10 trans-03">
											<?php the_title(); ?>
										</a>
									</h3>
								</div>
							</div>
						</div>
					<?php wp_reset_postdata(); }
				} else {
					echo "<p> No featured post available.</p";
				 } ?>
			</div>
		</div>
	</div>
</section>