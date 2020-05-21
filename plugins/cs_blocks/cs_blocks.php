<?php
/**
 * Plugin Name:     CS Blocks
 * Description:     Registers custom acf blocks
 * Author:          Christian Saldarriaga
 * Author URI:      https://github.com/SaldariagaDev
 * Text Domain:     cs_blocks
 * Domain Path:     /languages
 * Version:         0.1.0
 */

function cs_register_acf_block_types() {
	$svg_logo = '<svg width="49px" height="55px" viewBox="0 0 49 55" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Branding" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-139.000000, -44.000000)" fill="#36394D" fill-rule="nonzero" id="Favicon-Text-Copy"><g transform="translate(139.000000, 44.000000)"><path d="M26.4,54.45 C28.55,54.45 30.75,54.175 33,53.625 C35.25,53.075 37.3625,52.275 39.3375,51.225 C41.3125,50.175 43.0875,48.8875 44.6625,47.3625 C46.2375,45.8375 47.45,44.075 48.3,42.075 L48.3,42.075 L39.825,37.2 C39.225,38.65 38.425,39.8875 37.425,40.9125 C36.425,41.9375 35.3375,42.775 34.1625,43.425 C32.9875,44.075 31.75,44.55 30.45,44.85 C29.15,45.15 27.9,45.3 26.7,45.3 C24.4,45.3 22.2875,44.8 20.3625,43.8 C18.4375,42.8 16.7875,41.475 15.4125,39.825 C14.0375,38.175 12.975,36.2625 12.225,34.0875 C11.475,31.9125 11.1,29.65 11.1,27.3 C11.1,25.2 11.425,23.0875 12.075,20.9625 C12.725,18.8375 13.6875,16.9375 14.9625,15.2625 C16.2375,13.5875 17.8375,12.225 19.7625,11.175 C21.6875,10.125 23.95,9.6 26.55,9.6 C27.75,9.6 28.975,9.7375 30.225,10.0125 C31.475,10.2875 32.675,10.725 33.825,11.325 C34.975,11.925 36.05,12.7375 37.05,13.7625 C38.05,14.7875 38.9,16.05 39.6,17.55 L39.6,17.55 L47.55,12.075 C45.8,8.625 43.1375,5.825 39.5625,3.675 C35.9875,1.525 31.75,0.45 26.85,0.45 C22.7,0.45 19,1.225 15.75,2.775 C12.5,4.325 9.75,6.35 7.5,8.85 C5.25,11.35 3.5375,14.1875 2.3625,17.3625 C1.1875,20.5375 0.6,23.75 0.6,27 C0.6,30.4 1.2375,33.7375 2.5125,37.0125 C3.7875,40.2875 5.5625,43.2125 7.8375,45.7875 C10.1125,48.3625 12.825,50.45 15.975,52.05 C19.125,53.65 22.6,54.45 26.4,54.45 Z" id="C"></path><path d="M27.0508,42.2448 C28.6012,42.2448 30.0088,42.0816 31.2736,41.7552 C32.5384,41.4288 33.6264,40.946 34.5376,40.3068 C35.4488,39.6676 36.156,38.872 36.6592,37.92 C37.1624,36.968 37.414,35.8528 37.414,34.5744 C37.414,33.296 37.176,32.2216 36.7,31.3512 C36.224,30.4808 35.544,29.7464 34.66,29.148 C33.776,28.5496 32.7016,28.0532 31.4368,27.6588 C30.172,27.2644 28.7644,26.904 27.214,26.5776 C25.718,26.2512 24.4396,25.9384 23.3788,25.6392 C22.318,25.34 21.4408,24.9728 20.7472,24.5376 C20.0536,24.1024 19.5436,23.5788 19.2172,22.9668 C18.8908,22.3548 18.7276,21.5864 18.7276,20.6616 C18.7276,18.8392 19.3736,17.3908 20.6656,16.3164 C21.9576,15.242 24.018,14.7048 26.8468,14.7048 C30.274,14.7048 32.926,15.752 34.8028,17.8464 L34.8028,17.8464 L35.8636,16.2144 C34.6668,15.072 33.334,14.222 31.8652,13.6644 C30.3964,13.1068 28.7236,12.828 26.8468,12.828 C25.3236,12.828 23.9364,13.0048 22.6852,13.3584 C21.434,13.712 20.3596,14.2356 19.462,14.9292 C18.5644,15.6228 17.864,16.4728 17.3608,17.4792 C16.8576,18.4856 16.606,19.6416 16.606,20.9472 C16.606,22.144 16.81,23.1368 17.218,23.9256 C17.626,24.7144 18.2312,25.3876 19.0336,25.9452 C19.836,26.5028 20.8288,26.9652 22.012,27.3324 C23.1952,27.6996 24.562,28.0464 26.1124,28.3728 C27.6356,28.6992 28.9684,29.0392 30.1108,29.3928 C31.2532,29.7464 32.1984,30.168 32.9464,30.6576 C33.6944,31.1472 34.2588,31.7252 34.6396,32.3916 C35.0204,33.058 35.2108,33.8672 35.2108,34.8192 C35.2108,36.696 34.4968,38.0968 33.0688,39.0216 C31.6408,39.9464 29.662,40.4088 27.1324,40.4088 C24.9292,40.4088 22.9436,40.0348 21.1756,39.2868 C19.4076,38.5388 17.9116,37.5256 16.6876,36.2472 L16.6876,36.2472 L15.586,37.92 C18.714,40.8032 22.5356,42.2448 27.0508,42.2448 Z" id="S"></path></g></g></g></svg>';

	// Featured Projects
	acf_register_block_type([
		'name'              => 'featured_posts',
		'title'             => __('Featured Posts'),
		'description'       => __('Featured Posts with different display modes and fields'),
		'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/featured_posts.php',
		'category'          => 'widgets',
		'icon'              => $svg_logo,
		'mode'              => 'edit',
		'supports'          => [
			'mode' => false,
			'align' => false
		],
	]);

	// CTA Quick Links
/*	acf_register_block_type([
		'name'              => 'cta_quick_links',
		'title'             => __('Call to Action Quick Links'),
		'description'       => __('Card links with image, description and link'),
		'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/cta_quick_links.php',
		'category'          => 'widgets',
		'icon'              => $svg_logo,
		'mode'              => 'edit',
		'supports'          => [
			'mode' => false,
			'align' => false
		],
	]);*/

	// Slider
/*	acf_register_block_type([
		'name'              => 'slider',
		'title'             => __('Slider'),
		'description'       => __('Sliding images'),
		'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/slider.php',
		'category'          => 'widgets',
		'icon'              => $svg_logo,
		'mode'              => 'edit',
		'supports'          => [
			'mode' => false,
			'align' => false
		],
	]);*/

	// Events Widget
/*	acf_register_block_type([
		'name'              => 'events_widget',
		'title'             => __('Events Widget'),
		'description'       => __('List of events'),
		'render_template'   => plugin_dir_path( __FILE__ ) . 'blocks/events_widget.php',
		'category'          => 'widgets',
		'icon'              => $svg_logo,
		'mode'              => 'edit',
		'supports'          => [
			'mode' => false,
			'align' => false
		],
	]);*/
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
	add_action('acf/init', 'cs_register_acf_block_types');
}

