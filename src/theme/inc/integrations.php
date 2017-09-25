<?php
/**
* Require files that deal with various plugin integrations.
*
* @package Listable
*/

/**
 * Load PixCare compatibility file.
 */
// require get_template_directory() . '/inc/integrations/pixcare.php';

/**
 * Load Jetpack compatibility file.
 * http://jetpack.me/
 */
require get_template_directory() . '/inc/integrations/jetpack.php';

/**
 * Load YOAST SEO compatibility file.
 * https://wordpress.org/plugins/wordpress-seo/
 */
if ( class_exists( 'WPSEO_Utils' ) ) {
	require get_template_directory() . '/inc/integrations/yoast-seo.php';
}

/**
 * Load WPML compatibility file.
 */
if ( class_exists( 'SitePress' ) ) {
	require get_template_directory() . '/inc/integrations/wpml.php';
}
