<?php
/**
 * Plugin Name:     CS Projects
 * Description:     Custom post features for Projects
 * Author:          Christian Saldarriaga
 * Author URI:      https://github.com/SaldariagaDev
 * Text Domain:     cs_projects
 * Domain Path:     /languages
 * Version:         0.1.0
 */

//include("inc/taxonomy.php");

use WPDev\Facades\PostType;

PostType::create('project')
    ->menuIcon('dashicons-grid-view')
    ->supportsPageAttributes()
    ->supportsRevisions()
    ->register();


function project_taxonomies_init() {
	register_taxonomy( 'project_feature', ['project'], [
		'hierarchical'      => true,
		'public'            => false,
		'show_in_nav_menus' => true,
		'show_ui'           => true,
		'show_admin_column' => false,
		'query_var'         => true,
		'rewrite'           => true,
		'capabilities'      => [
			'manage_terms'  => 'edit_posts',
			'edit_terms'    => 'edit_posts',
			'delete_terms'  => 'edit_posts',
			'assign_terms'  => 'edit_posts'
		],
		'labels'            => [
			'name'                       => __( 'Project Features' ),
			'singular_name'              => _x( 'Project feature', 'taxonomy general name' ),
			'search_items'               => __( 'Search Project features' ),
			'popular_items'              => __( 'Popular Project features' ),
			'all_items'                  => __( 'All Project features' ),
			'parent_item'                => __( 'Parent Project feature' ),
			'parent_item_colon'          => __( 'Parent Project feature:' ),
			'edit_item'                  => __( 'Edit Project feature' ),
			'update_item'                => __( 'Update Project feature' ),
			'add_new_item'               => __( 'New Project feature' ),
			'new_item_name'              => __( 'New Project feature' ),
			'separate_items_with_commas' => __( 'Separate Project features with commas' ),
			'add_or_remove_items'        => __( 'Add or remove Project features' ),
			'choose_from_most_used'      => __( 'Choose from the most used Project features' ),
			'not_found'                  => __( 'No Project features found.' ),
			'menu_name'                  => __( 'Project Features' ),
		],
		'show_in_rest'      => true,
		'rest_base'         => 'project_feature',
		'rest_controller_class' => 'WP_REST_Terms_Controller',
	]);
}
add_action( 'init', 'project_taxonomies_init' );