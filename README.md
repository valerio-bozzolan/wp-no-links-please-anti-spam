# No links please! Anti-spam WordPress plugin

This astonishing-simple and really-effective anti-SPAM system just works. It definitively protects your WordPress site from SPAM without imposing annoying CAPTCHAs, configurations, third-party services, blockchains, artificial intelligence or unicorns. Oh, just avoid URLs in comments when not logged-in :^)

If your SPAM always contains links this could be your definitive solution.

## Why it works

You can't really stop SPAM-bots. Bots try to submit tons of links into your comments in the hope that search engines will index them. Fortunately WordPress already de-index them since years as default but unfortunately bots do their job anyway, shooting in the mass and hoping to find a way to spread their spam via web.

Here is the idea: applying a small "no links please!" netiquette you can pratically kill every SPAM-bot of this kind at their deep intentions, before even reaching your database.

Tl;dr If you do not write links you are a good human.

## Features

* It prevent anonymous spammers from flooding your website with comments with links
* It's astonishingly lightweight
* It's impressively not full of crapware
* It automagically works

## Antifeatures

* It provides an unuseful Dashboard widget
* It provides an unuseful shortcode (`[no_links_please_anti_spam_counter]`)
* It prevents URLs in comments from anonymous users

## Installation

As every WordPress plugin:

1. Download this repository as `.zip` file ([master.zip](https://github.com/valerio-bozzolan/wp-no-links-please-anti-spam/archive/master.zip))
2. Place it in your `/wp-content/plugins/` directory
3. Activate the plugin
4. Do not put URLs into your comments when not logged-in :^)

## Customization

To customize the error message put this somewhere in the `functions.php` of your WordPress theme:

	add_filter( 'no_links_please_anti_spam_error', function () {
		return "<b>Error</b>: Sir, please try again removing all the links from your comment. Yes, your comment was just dropped. Apologies, but SPAM is a bad beast.";
	} );

To customize the netiquette message instead:

	add_filter( 'no_links_please_anti_spam_netiquette', function () {
		return "Sir, before submitting just remember to avoid links. Cheers!";
	} );
