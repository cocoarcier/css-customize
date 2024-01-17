<?php
/**
 * Plugin Name: CSS Customize
 * Description: CSS Customize Plugin
 * Version:     1.0.0
 * Author:      cocoarcier
 * Text Domain: css-customize
 * Domain Path: /languages
 * License:     GPL2
 *
 * @author cocoarcier
 * @package WordPress
 * @subpackage CSS Customize
 * @since 1.0.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'You do not have access rights.' );
}

add_action( 'wp_enqueue_scripts', function() {
    $plugin_path = WP_PLUGIN_URL . '/css-customize/css/style.css';
    wp_enqueue_style( 'css-customize', $plugin_path, [], filemtime( $plugin_path ) );
} );
