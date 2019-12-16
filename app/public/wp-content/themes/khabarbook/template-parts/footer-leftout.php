<div class="col-sm-6 col-lg-4 p-b-20">
	<div class="size-h-3 flex-s-c">
		<h5 class="f1-m-7 cl0">
			छुटाउनु भयो कि?
		</h5>
	</div>

	<ul>
		<?php
			$latestPosts = new WP_Query(array(
				'posts_per_page' => 3,
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

					<li class="flex-wr-sb-s p-b-20">
						<a href="<?php the_permalink(); ?>" class="size-w-4 wrap-pic-w hov1 trans-03">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
						</a>

						<div class="size-w-5">
							<h6 class="p-b-5">
								<a href="<?php the_permalink(); ?>" class="f1-s-5 cl11 hov-cl10 trans-03">
									<?php echo get_the_title(); ?>
								</a>
							</h6>

							<span class="f1-s-3 cl6">
								Posted
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
					</li>
			<?php }
			} else { ?>

				<p class="p-l-20" style="text-align: center;">No news found.</p>
		<?php	}
		?>
	</ul>
</div>
