# My Definitive SPAM Fucker

This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)

## Installation

As every WordPress plugin.

## Customization

To customize the error message put this somewhere in the `functions.php` of your WordPress theme:

	add_filter( 'my_definitive_spam_fucker_message', function () {
		return "<b>Error</b>: Fuck you, and your URLs!";
	} );
