<?php
/**
 * Genuflex.
 *
 * Onboarding config to load plugins and homepage content on theme activation.
 *
 * @package Genuflex
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

$genuflex_shared_content = genesis_get_config( 'onboarding-shared' );

return array(
	'starter_packs' => array(
		'black-white' => array(
			'title'       => __( 'Black & White', 'genuflex' ),
			'description' => __( 'A pack with a homepage designed with black and white images.', 'genuflex' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-black-white.jpg',
			'demo_url'    => 'https://demo.studiopress.com/genesis-sample/',
			'config'      => array(
				'dependencies'     => array(
					'plugins' => $genuflex_shared_content['plugins'],
				),
				'content'          => array_merge(
					array(
						'homepage' => array(
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/home-black-white.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => array(
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							),
						),
					),
					$genuflex_shared_content['content']
				),
				'navigation_menus' => $genuflex_shared_content['navigation_menus'],
				'widgets'          => $genuflex_shared_content['widgets'],
			),
		),
		'color'       => array(
			'title'       => __( 'Color', 'genuflex' ),
			'description' => __( 'A pack with a homepage designed with color images.', 'genuflex' ),
			'thumbnail'   => get_stylesheet_directory_uri() . '/config/import/images/thumbnails/home-color.jpg',
			'demo_url'    => 'https://demo.studiopress.com/genesis-sample/home-color/',
			'config'      => array(
				'dependencies'     => array(
					'plugins' => $genuflex_shared_content['plugins'],
				),
				'content'          => array_merge(
					array(
						'homepage' => array(
							'post_title'     => 'Homepage',
							'post_content'   => require dirname( __FILE__ ) . '/import/content/home-color.php',
							'post_type'      => 'page',
							'post_status'    => 'publish',
							'comment_status' => 'closed',
							'ping_status'    => 'closed',
							'meta_input'     => array(
								'_genesis_layout'     => 'full-width-content',
								'_genesis_hide_title' => true,
								'_genesis_hide_breadcrumbs' => true,
								'_genesis_hide_singular_image' => true,
							),
						),
					),
					$genuflex_shared_content['content']
				),
				'navigation_menus' => $genuflex_shared_content['navigation_menus'],
				'widgets'          => $genuflex_shared_content['widgets'],
			),
		),
	),
);
