<?php
/**
 * Genuflex child theme.
 *
 * Theme supports.
 *
 * @package Genuflex
 * @author  StudioPress, gillespieza
 * @license GPL-2.0-or-later
 * @link    https://github.com/gillespieza/genesass-and-genuflex/
 */

return array(
	'genesis-custom-logo'             => array(
		'height'      => 120,
		'width'       => 700,
		'flex-height' => true,
		'flex-width'  => true,
	),
	'html5'                           => array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'navigation-widgets',
		'search-form',
		'script',
		'style',
	),
	'genesis-accessibility'           => array(
		'404-page',
		'drop-down-menu', // adds SuperFish.js.
		'headings', // semantic headings.
		'rems',
		'search-form', // input labels.
		'skip-links',
	),
	'genesis-after-entry-widget-area' => '',
	'genesis-footer-widgets'          => 3,
	'genesis-menus'                   => array(
		'primary'   => __( 'Header Menu', 'genuflex' ),
		'secondary' => __( 'Footer Menu', 'genuflex' ),
	),
	'genesis-structural-wraps'        => array(
		// 'header',
		// 'nav',
		// 'subnav',
		// 'site-inner',
		'footer-widgets',
		// 'footer',
		// 'nav-footer',
	),
);

