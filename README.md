# No links please! Anti-spam WordPress plugin

This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)

## Features

* It prevent anonymous spammers from flooding your website with comments with links
* It's astonishingly lightweight
* It's impressively not full of crapware
* It automagically works

## Antifeatures

* It provides an unuseful Dashboard widget
* It provides an unuseful shortcode (`[no_links_please_spammers_counter]`)
* It prevents URLs in comments from anonymous users

## Installation

As every WordPress plugin:

1. Download this repository as `.zip` file ([master.zip](https://github.com/valerio-bozzolan/wordpress-please-no-links-please-anti-spam-plugin/archive/master.zip))
2. Place it in your `/wp-content/plugins/` directory
3. Activate the plugin
4. Do not put URLs into your comments when not logged-in :^)

## Customization

To customize the error message put this somewhere in the `functions.php` of your WordPress theme:

	add_filter( 'no_links_please_anti_spam_message', function () {
		return "<b>Error</b>: Fuck you, and your URLs!";
	} );
