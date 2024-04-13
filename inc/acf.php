<?php

// Define path and URL to the ACF plugin.
define( 'MY_ACF_PATH', get_stylesheet_directory() . '/plugins/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/plugins/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

// (Optional) Hide the ACF admin menu item.
// add_filter('acf/settings/show_admin', 'my_acf_settings_show_admin');
// function my_acf_settings_show_admin( $show_admin ) {
//     return false;
// }

// Google Maps API.
// function my_acf_google_map_api( $api ){
//     $api['key'] = 'AIzaSyBgX0dsbxomEVsnRXagWy8WCTGAtU3Ee_g';
//     return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyBgX0dsbxomEVsnRXagWy8WCTGAtU3Ee_g');
}
add_action('acf/init', 'my_acf_init');

// Add Options Pages

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opciones Generales',
		'menu_title'	=> 'Opciones',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Opciones de Header',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Opciones de Footer',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Opciones de Menu',
		'menu_title'	=> 'Menu	',
		'parent_slug'	=> 'theme-general-settings',
	));
	
};

//Edit Admin Pages

add_action('admin_head', 'my_custom_admincss');

function my_custom_admincss() {
  echo '<style>
  	.select2-container:not(#acf-group_60120669bc8bf .select2-container) {
  	float: left;
  	width: 70% !important
  	}
    .icon_preview:not(#acf-group_60120669bc8bf .icon_preview) {
		float: right;
		width: 30%;
		text-align: center;
	}
	.acf-input .icon_preview i {
    	font-size: 30px;
    	color: #485cc7;
	}
  </style>';
}