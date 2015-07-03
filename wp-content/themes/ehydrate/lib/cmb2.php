<?php
/* CMB2 Metabox Functions for Theme */

add_action( 'cmb2_init', 'theme_register_cmb2_metaboxes' );
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_init' hook.
 */
function theme_register_cmb2_metaboxes() {

	$prefix = '_ehydrate_';
	
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'page_options_metabox',
		'title'         => __( 'Page Options', 'sage' ),
		'object_types'  => array( 'page', 'post' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

		$cmb_demo->add_field( array(
			'name'       => __( 'Page/Post Display Title', 'sage' ),
			'desc'       => __( 'The title to display on the page/Post (defaults to "Title" above)', 'sage' ),
			'id'         => $prefix . 'post_options_page_display_title',
			'type'       => 'text',
		) );




	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'test_metabox',
		'title'         => __( 'Test Metabox', 'sage' ),
		'object_types'  => array( 'page' ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
	) );

		$cmb_demo->add_field( array(
			'name'       => __( 'Test Image', 'sage' ),
			'desc'       => __( 'The image used in the hero', 'sage' ),
			'id'         => $prefix . 'background_image',
			'type'       => 'file',
		) );

}