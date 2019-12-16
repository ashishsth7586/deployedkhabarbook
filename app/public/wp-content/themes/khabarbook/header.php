<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset='<?php bloginfo('charset'); ?>'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body class="animsition">
<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span style="font-size: 14px;" class="left-topbar-item flex-wr-s-c">
							<span>
								<?php echo get_nepali_today_date(); ?>
							</span>
						</span>
					</div>

					<div class="right-topbar">
						<a href="<?php echo get_option('fbook'); ?>" target="_blank">
							<span class="fab fa-facebook-f"></span>
						</a>
						<a href="<?php echo get_option('tlink'); ?>" target="_blank">
							<span class="fab fa-twitter"></span>
						</a>
						<a href="<?php echo get_option('instagram'); ?>" target="_blank">
							<span class="fab fa-instagram"></span>
						</a>
						<a href="<?php echo get_option('youtube'); ?>" target="_blank">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('images/icons/logonew.png'); ?>" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span style="font-size: 14px;" class="left-topbar-item flex-wr-s-c">
							<span>
								<?php echo get_nepali_today_date(); ?>
							</span>
						</span>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>
					</li>
				</ul>

				<?php 
					wp_nav_menu( array(
						'theme_location' => 'headerMenu',
						'menu_class' => 'main-menu-m'
					));
				?>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('images/icons/logonew.png'); ?>" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
					<?
					$headerAd = new WP_Query(array(
						'posts_per_page' => 1,
						'post_type' => 'advertisement',
						'adcategory' => 'Header Ad',
					));
					while($headerAd->have_posts()) {
						$headerAd->the_post(); ?>
						<a href="<?php echo get_field('ad_url'); ?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG"></a>
					<?php }

					?>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.html">
							<img src="<?php echo get_theme_file_uri('images/icons/logo-01.png'); ?>" alt="LOGO">
						</a>

						<?php 
							wp_nav_menu( array(
								'theme_location' => 'headerMenu',
								'menu_class' => 'main-menu'
							));
						?>
					</nav>
				</div>
			</div>	
		</div>
	</header>
