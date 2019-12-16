<?php
/**
* Khabar Book functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Khabarbook
*/

function ad_sidebar($post_per_page) { ?>
	<!-- Side bar -->
	<div class="col-md-10 col-lg-4">
		<div class="p-l-10 p-rl-0-sr991 p-b-20">
			<!-- Advertisement-->
			<div class="p-b-30">
				<div class="how2 how2-cl4 flex-s-c">
					<h3 class="f1-m-2 cl3 tab01-title">						
						विज्ञापन
					</h3>
				</div>
			</div>

			<?php 
			$sidebarAd = new WP_Query(array(
				'posts_per_page' => $post_per_page,
				'post_type' => 'advertisement',
				'adcategory' => 'Sidebar Ad'
			));

			while($sidebarAd->have_posts()) {
				$sidebarAd->the_post(); ?>
				<!--  -->
				<div class="flex-c-s p-t-2 p-b-5">
					<a href="<?php echo get_field('ad_url'); ?>" target="_blank">
						<img class="max-w-full" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="IMG">
					</a>
				</div>
			<?php }
			?>
		</div>
	</div>

<?php }

if ( ! function_exists( 'khabarbook_setup' ) ) :
	/*
	* Sets up theme defaults and register support for various Wordpress features.
	*
	* Note that this function is hooked into the after_setup_theme hook, which 
	* run before the init hook. The init hook is too late for some features,
	* such as indicating support for post thumbnails.
	*/

	function khabarbook_setup() {
		/*
		* Let Wordpress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect Wordpress to
		* provide it for us.
		*/
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// Register Nav menu
		register_nav_menu('headerMenu', 'Main Header Menu');
	}

endif;

add_action('after_setup_theme', 'khabarbook_setup');


/**
* Enqueue scripts and styles.
*/
	function khabarbook_scripts() {

		wp_enqueue_style('bootstrap-min', get_theme_file_uri('/vendor/bootstrap/css/bootstrap.min.css'));		
		wp_enqueue_style('font-awesome', get_theme_file_uri('/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css'));
		wp_enqueue_style('iconic-material-design', get_theme_file_uri('/fonts/iconic/css/material-design-iconic-font.min.css'));
		wp_enqueue_style('animate-css', get_theme_file_uri('/vendor/animate/animate.css'));
		wp_enqueue_style('hamburger-css', get_theme_file_uri('/vendor/css-hamburgers/hamburgers.min.css'));
		wp_enqueue_style('animation-anmistion', get_theme_file_uri('/vendor/animsition/css/animsition.min.css'));
		wp_enqueue_style('utility-css', get_theme_file_uri('/css/util.min.css'));
		wp_enqueue_style('khabarbook_main_styles', get_stylesheet_uri());
		wp_enqueue_style('main-css', get_theme_file_uri('/css/main.css'), NULL, microtime());

		wp_enqueue_script('jquery', get_theme_file_uri('vendor/jquery/jquery-3.2.1.min.js'), NULL, '1.0', true);
		wp_enqueue_script('animation-animstion', get_theme_file_uri('/vendor/animsition/js/animsition.min.js'), NULL, '1.0', true);
		wp_enqueue_script('popper-js', get_theme_file_uri('/vendor/bootstrap/js/popper.js'), NULL, '1.0', true);
		wp_enqueue_script('bootstrap-min-js', get_theme_file_uri('/vendor/bootstrap/js/bootstrap.min.js'), array('jquery'), '1.0', true);
		wp_enqueue_script('main-js', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);

	}

	add_action('wp_enqueue_scripts', 'khabarbook_scripts');

	function time_ago( $type = 'post' ) {
	    $d = 'comment' == $type ? 'get_comment_time' : 'get_post_time';

	    return human_time_diff($d('U'), current_time('timestamp')) . " " . __('ago');

	}

	function gt_get_post_view() {
	    $count = get_post_meta( get_the_ID(), 'post_views_count', true );
	    return "$count views";
	}

	function gt_set_post_view() {
	    $key = 'post_views_count';
	    $post_id = get_the_ID();
	    $count = (int) get_post_meta( $post_id, $key, true );
	    $count++;
	    update_post_meta( $post_id, $key, $count );
	}

	function gt_posts_column_views( $columns ) {
	    $columns['post_views'] = 'Views';
	    return $columns;
	}

	function gt_posts_custom_column_views( $column ) {
	    if ( $column === 'post_views') {
	        echo gt_get_post_view();
	    }
	}
	add_filter( 'manage_posts_columns', 'gt_posts_column_views' );
	add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );


//general settings Customization
add_action('admin_init', 'custom_general_section');

function custom_general_section() {
	add_settings_section(
		'custom_settings_section', // Section ID
		'Site Details', // Section Title
		'section_options_callback', // Callback function
		'general' // Show up on the General Settings Page
	);

	/*
	* Site Meta Details:
	* 1. Phone Number
	* 2. Footer Content
	* 3. Office Address 
	*/
	add_settings_field( 'officeaddress', 'Office Address', 'input_text_callback', 'general', 'custom_settings_section', array('officeaddress'));
	add_settings_field( 'officeemail', 'Office Email', 'input_text_callback', 'general', 'custom_settings_section', array('officeemail'));
	add_settings_field( 'phone', 'Phone No.', 'input_text_callback', 'general', 'custom_settings_section', array('phone'));
	add_settings_field( 'fcontent', 'Content', 'input_textarea_callback', 'general', 'custom_settings_section', array('fcontent' ) );
	
	/*
	* Social Links: Facebook, Instagram, Twitter and Youtube
	*/
	add_settings_field( 'fbook', 'Facebook', 'input_url_callback', 'general', 'custom_settings_section', array('fbook' ) );
	add_settings_field( 'instagram', 'Instagram', 'input_url_callback', 'general', 'custom_settings_section', array('instagram' ) );
	add_settings_field( 'tlink', 'Twitter', 'input_url_callback', 'general', 'custom_settings_section', array('tlink' ) );
	add_settings_field( 'youtube', 'Youtube', 'input_url_callback', 'general', 'custom_settings_section', array('youtube' ) );

	/*
	* Register the above settings to General Setting.
	*/
	register_setting('general', 'officeemail', 'esc_attr');
	register_setting('general', 'officeaddress', 'esc_attr');
	register_setting('general','phone', 'esc_attr');
	register_setting('general','fcontent', 'esc_attr');
	register_setting('general','fbook', 'esc_attr');
	register_setting('general','instagram', 'esc_attr');
	register_setting('general','tlink', 'esc_attr');
	register_setting('general','youtube', 'esc_attr');
}

function section_options_callback() { // Section Callback
	echo '<p>Logo, Footer, and Social Links Details</p>';
}

function input_text_callback($args) {
	$option = get_option($args[0]);
	echo '<input type="text" id="'. $args[0] .'" name="'. $args[0] .'" value="' .      $option . '" />';
}

function input_url_callback($args) { 
	$option = get_option($args[0]);
	echo '<input type="url" id="'. $args[0] .'" name="'. $args[0] .'" value="' .      $option . '" />';
}

function input_textarea_callback($args) { 
	$option = get_option($args[0]);
	echo '<textarea rows="5" cols="50" id="'. $args[0] .'" name="'. $args[0] .'">' . $option . '</textarea>';
}
?>