<div class="col-lg-4 p-b-20">
	<div class="size-h-3 flex-s-c">
		<a href="<?php echo site_url(); ?>">
			<img class="max-s-full" src="<?php echo get_theme_file_uri('images/icons/logo-02.png'); ?>" alt="LOGO">
		</a>
	</div>

	<div>
		<p class="f1-s-1 cl11 p-b-16">
			<?php echo get_option('fcontent'); ?>
		</p>
		<p class="f1-s-1 cl11 p-b-5">
			<span style="font-weight: bold;">Office Address:</span> <?php echo get_option('officeaddress'); ?>
		</p>
		<p class="f1-s-1 cl11 p-b-5">
			<span style="font-weight: bold;">Phone No.: </span> <?php echo get_option('phone'); ?>
		</p>
		<p class="f1-s-1 cl11 p-b-5">
			<span style="font-weight: bold;">Email: </span><?php echo get_option('officeemail'); ?>
		</p>

		<div class="p-t-15">
			<a href="<?php echo get_option('fbook'); ?>" target="_blank" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
				<span class="fab fa-facebook-f"></span>
			</a>

			<a href="<?php echo get_option('tlink'); ?>" target="_blank" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
				<span class="fab fa-twitter"></span>
			</a>

			<a href="<?php echo get_option('youtube'); ?>" target="_blank" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">
				<span class="fab fa-youtube"></span>
			</a>
		</div>
	</div>
</div>