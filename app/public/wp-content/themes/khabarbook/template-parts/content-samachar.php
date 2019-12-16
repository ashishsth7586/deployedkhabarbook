<!-- समाचार -->
<div class="tab01 p-b-20">
	<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
		<!-- Brand tab -->
		<h3 class="fs-22 cl12 tab01-title">
			समाचार
		</h3>
		<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a  style="font-size: 20px !important;" class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">मुख्य समाचार</a>
			</li>

			<li class="nav-item">
				<a style="font-size: 20px !important;" class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">ताजा समाचार</a>
			</li>

			<li class="nav-item">
				<a style="font-size: 20px !important;" class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">लोकप्रिय</a>
			</li>

			<li class="nav-item-more dropdown dis-none">
				<a style="font-size: 20px !important;" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
					<i class="fa fa-ellipsis-h"></i>
				</a>

				<ul class="dropdown-menu">
					
				</ul>
			</li>
		</ul>
	</div>

	<!-- Tab panes -->
	<div class="tab-content p-t-35">
		<!-- - -->
		<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
			<div class="row">
				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
					$mukhyaNews_first = new WP_Query(array(
						'posts_per_page' => 1,
						'category_name' => 'मुख्य खबर',
					));
					$mukhyaNews_rest = new WP_Query(array(
						'posts_per_page' => 3,
						'category_name' => 'मुख्य खबर',
						'offset' => 1,
								
					));
					if($mukhyaNews_first->have_posts()) {
					while($mukhyaNews_first->have_posts()) {
						$mukhyaNews_first->the_post(); ?>
							<!-- Item post -->	
							<div class="m-b-30">
								<a href="<?php the_permalink(); ?>" class="wrap-pic-w hov1 trans-03">
									<img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="IMG">
								</a>

								<div class="p-t-20">
									<h5 class="p-b-5">
										<a href="<?php the_permalink(); ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?php echo get_the_title(); ?>
										</a>
									</h5>

									<span class="cl8">
										by <?php echo get_the_author(); ?>
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
					<?php }	
					}
						else { ?>
								<p style="text-align: center;">No news found!</p>	
					<?php	}
					?>
				</div>

				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
						while($mukhyaNews_rest->have_posts()) {
							$mukhyaNews_rest->the_post(); ?>
							<!-- Item post -->	
							<div class="flex-wr-sb-s m-b-30">
								<a href="<?php the_permalink(); ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
									<img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="IMG">
								</a>

								<div class="size-w-2">
									<h5 class="p-b-5">
										<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											<?php echo get_the_title(); ?>
										</a>
									</h5>

									<span class="cl8">
										by <?php echo get_the_author(); ?>
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
					<?php }
					?>
				</div>
			</div>
		</div>

		<!-- - -->
		<div class="tab-pane fade" id="tab1-2" role="tabpanel">
			<div class="row">
				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
					$tajaNews_first = new WP_Query(array(
						'posts_per_page' => 1,
						'category_name' => 'ताजा खबर',
					));
					$tajaNews_rest = new WP_Query(array(
						'posts_per_page' => 3,
						'category_name' => 'ताजा खबर',
						'offset' => 1,
								
					));
					if ($tajaNews_first->have_posts()) {
					while($tajaNews_first->have_posts()) {
						$tajaNews_first->the_post(); ?>
							<!-- Item post -->	
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
										by <?php echo get_the_author(); ?>
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
					<?php }	
					} 
						else { ?>
							<p style="text-align: center;">No news found.</p>
					<?php	}
					?>
				</div>

				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
						while($tajaNews_rest->have_posts()) {
							$tajaNews_rest->the_post(); ?>
							<!-- Item post -->	
							<div class="flex-wr-sb-s m-b-30">
								<a href="<?php the_permalink(); ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
								</a>

								<div class="size-w-2">
									<h5 class="p-b-5">
										<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											<?php echo get_the_title(); ?>
										</a>
									</h5>

									<span class="cl8">
										by <?php echo get_the_author(); ?>
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
					<?php }
					?>
				</div>
			</div>
		</div>

		<!-- - -->
		<div class="tab-pane fade" id="tab1-3" role="tabpanel">
			<div class="row">
				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
					$popularNews_first = new WP_Query(array(
						'posts_per_page' => 1,
						'category_name' => 'लोकप्रिय',
					));
					$popularNews_rest = new WP_Query(array(
						'posts_per_page' => 3,
						'category_name' => 'लोकप्रिय',
						'offset' => 1,
								
					));
					if($popularNews_first->have_posts()) {
					while($popularNews_first->have_posts()) {
						$popularNews_first->the_post(); ?>
							<!-- Item post -->	
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
										by <?php echo get_the_author(); ?>
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
					<?php }	}
						else { ?>
								<p style="text-align: center;">No news found.</p>
					<?php	}
					?>
				</div>

				<div class="col-sm-6 p-r-25 p-r-15-sr991">
					<?php 
						while($popularNews_rest->have_posts()) {
							$popularNews_rest->the_post(); ?>
							<!-- Item post -->	
							<div class="flex-wr-sb-s m-b-30">
								<a href="<?php the_permalink(); ?>" class="size-w-1 wrap-pic-w hov1 trans-03">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
								</a>

								<div class="size-w-2">
									<h5 class="p-b-5">
										<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
											<?php echo get_the_title(); ?>
										</a>
									</h5>

									<span class="cl8">
										by <?php echo get_the_author(); ?>
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
					<?php }
					?>
				</div>
			</div>
		</div>
	</div>
</div>