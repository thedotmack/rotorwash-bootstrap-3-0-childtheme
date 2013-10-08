<?php
/**
 * Child Theme functions and definitions
 *
 * @package WordPress
 * @subpackage RotorWash
 * @since RotorWash 1.0
 */


//  Define Image Sizes
/*  ****************** */

// add_image_size('large', 300, 300, true);
// add_image_size('slide', 644, 229, true);


// register_nav_menus( array(
//     'secondary' => __( 'Secondary Navigation', 'copterlabs' ),
// ) );


//  Define Custom Post Types here...
/*  ********************************

		Define as many of these as you want
		within the cpt_init() function.

		$custom_post_types[] = array(
				'singular'  =>  'Hipster Chick', 
				'plural'    =>  'Hipster Chicks',
				'supports'  =>  array(
														'title',
														'editor',
														'author',
														'thumbnail',
														'excerpt',
														'trackbacks',
														'custom-fields',
														'comments',
														'revisions',
														'page-attributes',
														'post-formats',
												)
		);
*/
// function cpt_init() {
//     $custom_post_types[] = array(
//         'singular'  => 'Title', 
//         'plural'    => 'Titles',
//         'supports'  => array('title', 'editor', 'thumbnail', 'custom-fields')
//     );
//     rw_add_custom_post_types($custom_post_types);
// }
// add_action('init', 'cpt_init');


//  Load Additional Scripts
/*  ***********************

		wp_enqueue_script(
				'script_name',
				CHILD_TEMPLATE_URL . '/js/scriptname.js',
				array('jquery') // (Optional Attribute, include if script depends on jQuery) 
*/

function additional_scripts() {
		wp_enqueue_script(
				'init',
				CHILD_TEMPLATE_URL . '/js/init.js',
				array('jquery')
		);
}
add_action('wp_enqueue_scripts', 'additional_scripts');



function additional_theme_styles()  
{ 
	// Register the style like this for a theme:  
	// (First the unique name for the style (custom-style) then the src, 
	// then dependencies and ver no. and media type)

	wp_register_style( 'screen',  CHILD_TEMPLATE_URL . '/assets/css/screen.css'  );
	wp_register_style( 'lte-ie8', CHILD_TEMPLATE_URL . '/assets/css/lte-ie8.css' );

	global $wp_styles;
	$wp_styles->add_data('lte-ie8', 'conditional', 'lte IE 8');

	// enqueing:
	wp_enqueue_style( 'screen'  );
	wp_enqueue_style( 'lte-ie8' );
}
add_action('wp_enqueue_scripts', 'additional_theme_styles');



/* SAMPLE CODE FOR ADDITIONAL THEME SETTINGS
** *****************************************
*/

// function rw_additional_settings() {
//     add_settings_field( 'bio', 'Bio Text (Footer)', 'rw_bio', 'rw-theme-settings', 'rw-theme-settings', array('label_for'=>'bio'));
// }
// add_action('custom_settings_hook','rw_additional_settings');

// function rw_bio() { rw_textarea(__FUNCTION__); }



// function rw_more_widgets_init() {
//     register_sidebar( array(
//         'name' => __( 'Sidebar', 'rotorwash' ),
//         'id' => 'primary-widget-area',
//         'description' => __( 'The primary widget area', 'rotorwash' ),
//         'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
//         'after_widget' => '</li>',
//         'before_title' => '<h3 class="widget-title">',
//         'after_title' => '</h3>',
//     ) );
// }
// add_action('widgets_init', 'rw_more_widgets_init', 10);




