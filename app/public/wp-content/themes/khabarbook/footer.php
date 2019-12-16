<!-- Footer -->
<footer>
	<div class="bg2 p-t-40 p-b-25">
		<div class="container">
			<div class="row">
				<?php get_template_part('template-parts/footer', 'description'); ?>
				<?php get_template_part('template-parts/footer', 'leftout'); ?>
				<?php get_template_part('template-parts/footer', 'explore'); ?>
			</div>
		</div>
	</div>

	<div class="bg11">
		<div class="container size-h-4 flex-c-c p-tb-15">
			<span class="f1-s-1 cl0 txt-center">
				Copyright © 2018-<?php echo get_the_time('Y'); ?> 

				<a href="https://github.com/ashishsth7586" target="_blank" class="f1-s-1 cl10 hov-link1">Ashish.</a>

				All rights reserved.
			</span>
		</div>
	</div>
</footer>
<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
	<span class="symbol-btn-back-to-top">
		<span class="fas fa-angle-up"></span>
	</span>
</div>

<?php wp_footer(); ?>
</body>
</html>