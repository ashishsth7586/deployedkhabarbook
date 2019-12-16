<!-- स्वास्थ्य-जीवनशैली -->
<div class="col-sm-6 p-r-15-sr991 p-b-5">
	<div class="how2 how2-cl2 flex-sb-c m-b-35">
		<h3 class="fs-22 cl13 tab01-title">स्वास्थ्य-जीवनशैली</h3>
	</div>
		<?php 
			$healthNews_first = new WP_Query(array(
				'posts_per_page' => 1,
				'category_name' => 'स्वास्थ्य-जीवनशैली',
			));
			$healthNews_rest = new WP_Query(array(
				'posts_per_page' => 3,
				'category_name' => 'स्वास्थ्य-जीवनशैली',
				'offset' => 1,
			));
			if($healthNews_first->have_posts()) {
				while($healthNews_first->have_posts()) {
					$healthNews_first->the_post(); $healthNews_first-> gt_set_post_view(); ?>
						<!-- Main Item post -->	
						<div class="m-b-30">
							<a href="<?php the_permalink(); ?>" class="wrap-pic-w hov1 trans-03">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
							</a>

							<div class="p-t-20">
								<h5 class="p-b-5">
									<a href="<?php the_permalink(); ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
										<?php echo get_the_title(); ?>
									</a>
								</h5>

								<span class="cl8">
									by <?php the_author(); ?>
									<span class="f1-s-3 m-rl-3">|</span>
									<span class="f1-s-3"><?php echo time_ago(); ?></span>
									<span class="f1-s-3 m-rl-3">|</span>
									<span class="f1-s-3"><i class="fas fa-eye m-r-3"></i>
										<?= gt_get_post_view(); ?>
									</span>
								</span>
							</div>
						</div>
				<?php }
			} else { ?>
					<p style="text-align: center;">No news found!! </p>
			<?php }
		?>
		<?php
			while($healthNews_rest->have_posts()) {
				$healthNews_rest->the_post(); $healthNews_rest-> gt_set_post_view(); ?>
				<!-- Item post -->	
				<div class="flex-wr-sb-s m-b-30">
					<a href="<?php  the_permalink(); ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
					</a>

					<div class="size-w-2">
						<h5 class="p-b-5">
							<a href="<?php the_permalink(); ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
								<?php the_title(); ?>
							</a>
						</h5>

						<span class="cl8">
							by <?php the_author(); ?>
							<span class="f1-s-3 m-rl-3">|</span>
							<span class="f1-s-3"><?php echo time_ago(); ?></span>
							<span class="f1-s-3 m-rl-3">|</span>
							<span class="f1-s-3"><i class="fas fa-eye m-r-3"></i>
								<?= gt_get_post_view(); ?>
							</span>
						</span>
					</div>
				</div>
		<?php	}
		?>
</div>