<?php
/**
 * Great Beauty back compat functionality
 *
 * Prevents Great Beauty from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backward compatible beyond that
 * and relies on many newer functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Great Beauty
 * @since Great Beauty 1.0
 */

/**
 * Prevent switching to Great Beauty on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Great Beauty 1.0
 */
function greatbeauty_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'greatbeauty_upgrade_notice' );
}
add_action( 'after_switch_theme', 'greatbeauty_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Great Beauty on WordPress versions prior to 3.6.
 *
 * @since Great Beauty 1.0
 */
function greatbeauty_upgrade_notice() {
	$message = sprintf( __( 'Great Beauty requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'greatbeauty' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Theme Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Great Beauty 1.0
 */
function greatbeauty_customize() {
	wp_die( sprintf( __( 'Great Beauty requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'greatbeauty' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'greatbeauty_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Great Beauty 1.0
 */
function greatbeauty_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Great Beauty requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'greatbeauty' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'greatbeauty_preview' );
