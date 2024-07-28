<?php

/**
 * Plugin Name: Converter for Media
 * Description: Speed up your website by using our WebP & AVIF Converter (formerly WebP Converter for Media). Serve WebP and AVIF images instead of standard formats JPEG, PNG and GIF now!
 * Version: 5.13.0
 * Author: matt plugins - Optimize images by convert WebP & AVIF
 * Author URI: https://url.mattplugins.com/converter-plugin-author-link
 * Text Domain: webp-converter-for-media
 * Network: true
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once __DIR__ . '/vendor/autoload.php';

new WebpConverter\WebpConverter(
	new WebpConverter\PluginInfo( __FILE__, '5.13.0' )
);
