<!-- Headline -->
<div class="container">
	<div class="bg0 flex-wr-sb-c p-r-20 p-tb-8">
		<div class="fs-18 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
			<span class="text-uppercase cl2 p-r-8">
				ताजा खबर:
			</span>
			
			<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
				<?php 
					$tajaKhabar = new WP_Query(array(
						'posts_per_page' => 5,	
					));

					if($tajaKhabar->have_posts()) {
						while($tajaKhabar->have_posts()) {
						$tajaKhabar->the_post(); ?>
						<span class="dis-inline-block slide100-txt-item animated visible-false">
							<?php the_title(); ?>
						</span>
							<?php wp_reset_postdata(); }	
					} else {
						echo '<span class="dis-inline-block slide100-txt-item animated visible-false"> Please Add News! </span>';	
				} ?>
					
			</span>
		</div>
	</div>
</div>