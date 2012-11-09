=== Plugin Name ===
Contributors: MartySpellerberg
Tags: analytics, google, javascript, statistics, stats, tracking
Requires at least: 3.4
Tested up to: 3.4
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A (very) simple plugin for embedding a Google Analytics tracking code in your WordPress site.

== Description ==

This is a (very) simple plugin for embedding a Google Analytics (GA) tracking code in your site. It has two features:

* It stores the GA code as a site setting. This means no modifying theme files, which is especially useful in a Multisite context;
* The GA code is NOT inserted for logged-in users, meaning you won't run up your visitor counts as you administer your site;

And that's it! It works with Google's "Asynchronous" tracking code, which goes in the page's head.

== Installation ==

1. Install and activate the plugin, in the normal way;
2. Go to Google Analytics and follow the various steps to generate your tracking code. Copy the entire tracking code to your clipboard;
3. From your site's Dashboard, navigate to Settings -> Google Analytics;
4. Paste your tracking code into the large box and click "Save Changes";

That's it!

== Screenshots ==

1. Paste your Google Analytics tracking code into the box
