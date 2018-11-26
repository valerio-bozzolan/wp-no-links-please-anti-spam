<?php
/*
Plugin Name: My Definitive SPAM Fucker
Version:     1.0.0
Description: This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)
Author:      Valerio Bozzolan
Author URI:  https://boz.reyboz.it/
License:     GPL3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

/**
 * Callback fired when a comment is submitted
 *
 * @param $approved bool
 * @param $commentdata array
 * @since 1.0.0
 */
function my_definitive_spam_fucker_handler( $approved, $commentdata ) {
	if( empty( $commentdata[ 'user_ID' ] ) ) {
		$found = preg_match( '@https?://[^\",]+@i', $commentdata[ 'comment_content' ] );
		if( ! empty( $commentdata[ 'comment_author_url' ] ) || $found === 1 ) {
			$message = __( "You triggered My Definitive SPAM Fucker. Please remove URLs from your comment.", 'definitive-spam-fucker' );
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
