<?php
/**
 * Plugin Name:     MRW Group Grid Block Style
 * Description:     Display contents of a Group block in a variety of grid styles
 * Author:          Mark Root-Wiley, MRW Web Design
 * Author URI:      https://MRWweb.com
 * Text Domain:     mrw-group-grid
 * Version:         0.1.0
 *
 * @package         Mrw_Card_Block
 */

namespace MRW\GroupGrid;

define( 'MRW_GROUP_GRID_VERSION', '0.1.0' );

add_action( 'wp_enqueue_scripts', 'MRW\GroupGrid\front_end_assets', 9 );
function front_end_assets() {

	wp_enqueue_style(
		'mrw-group-grid-styles',
		plugin_dir_url( __FILE__ ) . 'group-grid-styles.css',
		[],
		MRW_GROUP_GRID_VERSION
	);

}

add_action( 'enqueue_block_editor_assets', 'MRW\GroupGrid\editor_assets' );
function editor_assets() {

	wp_enqueue_style(
		'mrw-group-grid-styles',
		plugin_dir_url( __FILE__ ) . 'group-grid-styles.css',
		[],
		MRW_GROUP_GRID_VERSION
	);

	wp_enqueue_style(
		'mrw-group-grid-editor-styles',
		plugin_dir_url( __FILE__ ) . 'group-grid-editor-styles.css',
		[],
		MRW_GROUP_GRID_VERSION
	);

}

add_action( 'init', 'MRW\GroupGrid\register_block_styles' );
function register_block_styles() {

	register_block_style(
		'core/group',
		array(
			'label' => 'Auto Grid',
			'name' => 'mrw-grid--auto',
		)
	);

	register_block_style(
		'core/group',
		array(
			'label' => 'Two Columns',
			'name' => 'mrw-grid--2col',
		)
	);

	register_block_style(
		'core/group',
		array(
			'label' => 'Three Columns',
			'name' => 'mrw-grid--3col',
		)
	);

	register_block_style(
		'core/group',
		array(
			'label' => 'Flex Grid',
			'name' => 'mrw-flex-grid',
		)
	);

}
