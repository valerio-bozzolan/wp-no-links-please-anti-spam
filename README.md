# My Definitive SPAM Fucker

This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)

## Features

* Politically correct and anyway completly customizable error message (e.g. as default without any "fuck")
* It's astonishingly lightweight
* It's impressively not full of crapware
* It automagically works

## Antifeatures

* It provides an unuseful Dashboard widget
* It provides an unuseful shortcode (`[spammers_fucked]`)
* It prevents URLs in comments from anonymous users

## Installation

As every WordPress plugin:

1. Download this repository as `.zip` file ([master.zip](https://github.com/valerio-bozzolan/wp-my-definitive-spam-fucker/archive/master.zip))
2. Place it in your `/wp-content/plugins/` directory
3. Activate the plugin
4. Do not put URLs into your comments when not logged-in :^)

## Customization

To customize the error message put this somewhere in the `functions.php` of your WordPress theme:

	add_filter( 'my_definitive_spam_fucker_message', function () {
		return "<b>Error</b>: Fuck you, and your URLs!";
	} );
