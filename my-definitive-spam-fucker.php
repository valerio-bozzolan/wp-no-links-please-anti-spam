<?php
/*
Plugin Name: My Definitive SPAM Fucker
Version:     1.1.0
Description: This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)
Author:      Valerio Bozzolan
Author URI:  https://boz.reyboz.it/
Plugin URI:  https://github.com/valerio-bozzolan/wp-my-definitive-spam-fucker
License:     GPL3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

defined( 'ABSPATH' ) or die( 'Hello lamer!' );

/**
 * Callback fired when a comment is submitted
 *
 * @param $approved bool
 * @param $commentdata array
 * @since 1.0.0
 */
function my_definitive_spam_fucker_handler( $approved, $commentdata ) {
	if( empty( $commentdata[ 'user_ID' ] ) && empty( $commentdata[ 'type' ] ) ) {
		$found = preg_match( '@https?://[^\",]+@i', $commentdata[ 'comment_content' ] );
		if( ! empty( $commentdata[ 'comment_author_url' ] ) || $found === 1 ) {
			// increment counters
			update_option( 'my_definitive_spam_fucker_count', my_definitive_spam_fucker_counter() + 1, false );

			// die with a message
			$message = __( "You triggered my anti-SPAM system. Please remove URLs from your comment.", 'my-definitive-spam-fucker' );
			$message = apply_filters( 'my_definitive_spam_fucker_message', $message );
			wp_die( $message, $title, [
				'response'  => 400,
				'back_link' => true,
			] );
		}
	}
	return $approved;
}
add_filter( 'pre_comment_approved', 'my_definitive_spam_fucker_handler', '99', 2 );

/**
 * Unuseful callback fired when the shortcode is used
 */
function my_definitive_spam_fucker_counter() {
	return get_option( 'my_definitive_spam_fucker_count', 0 );
}
add_shortcode( 'spammers_fucked', 'my_definitive_spam_fucker_counter' );

/**
 * Register the unuseful Dashboard widget
 */
function my_definitive_spam_fucker_dashboard_widget() {
	wp_add_dashboard_widget( 'my_definitive_spam_fucker_dashboard_widget', __( "My Definitive SPAM Fucker", 'my-definitive-spam-fucker' ), 'my_definitive_spam_fucker_dashboard_widget_content' );
}

/**
 * Register the unuseful Dashboard widget content
 */
function my_definitive_spam_fucker_dashboard_widget_content() {
	echo '<p>';
	printf(
		__( "Spammers fucked since activation: %s and counting!", 'my-definitive-spam-fucker' ),
		'<b>' . my_definitive_spam_fucker_counter() . '</b>'
	);
	echo '</p>';
}
add_action( 'wp_dashboard_setup', 'my_definitive_spam_fucker_dashboard_widget' );

// allow shortcodes to be used in widgets
add_filter( 'widget_text', 'do_shortcode' );

/**
 * Unuseful callback fired when the plugin is activated
 */
function my_definitive_spam_fucker_activation() {
	add_option( 'my_definitive_spam_fucker_init',  date('U') );
	add_option( 'my_definitive_spam_fucker_count', 0 );
}
register_uninstall_hook( __FILE__, 'my_definitive_spam_fucker_activation' );

/**
 * Unuseful callback fired when the plugin is uninstalled
 */
function my_definitive_spam_fucker_uninstall() {
	delete_option( 'my_definitive_spam_fucker_init' );
	delete_option( 'my_definitive_spam_fucker_count' );
}
register_uninstall_hook( __FILE__, 'my_definitive_spam_fucker_uninstall' );
