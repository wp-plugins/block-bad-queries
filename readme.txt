=== Plugin Name ===

Plugin Name: Block Bad Queries (BBQ)
Plugin URI: http://perishablepress.com/block-bad-queries/
Description: Automatically protects WordPress against malicious URL requests.
Tags: security, protect, firewall, php, eval, malicious, url, request, blacklist
Author URI: http://monzilla.biz/
Author: Jeff Starr
Contributors: Aldo Latino, John Hoff, James Wilkes
Donate link: http://digwp.com/book/
Requires at least: 3.0
Tested up to: 3.4.2
Stable tag: 20121026
Version: 20121026
License: GPLv2 or later

== Description ==

Block Bad Queries (BBQ) helps protect WordPress against malicious URL requests. For example, BBQ checks for excessively long request strings (i.e., greater than 255 characters), as well as the presence of either "eval(" or "base64" in the request URI. These sorts of nefarious requests were implicated in the September 2009 WordPress attacks, and continue to threaten websites around the Web.

== Installation ==

No configuration necessary. Upload, activate and done. BBQ blocks bad queries automically to protect your site against malicious URL requests.

To protect your site using this lightweight plugin, unzip and upload the "block-bad-queries" folder and contents to your plugin directory and activate via the WP Admin.

Once active, this plugin will silently and effectively close any connections for these sorts of injection-type attacks.

== Upgrade Notice ==

To upgrade BBQ, remove old version and replace with new version. Nothing else needs done.

== Screenshots ==

No screenshots available - code only.

== Changelog ==

2011/02/21 - Updated readme.txt file
2009/12/30 - Additional request strings added
2009/12/30 - Added check for admin users
2012/10/25 - Rebuilt plugin using 5G/6G technology

== Frequently Asked Questions ==

Q: Do I need to do anything else for BBQ to work?
A: Nope, just install and relax knowing that BBQ is protecting your site from bad URL requests.

To ask a question, visit the BBQ homepage @ http://perishablepress.com/block-bad-queries/ or contact me @ http://perishablepress.com/contact/

== Donations ==

I created this plugin with love for the WP community. To show support, consider purchasing my new book, ".htaccess made easy" @ http://htaccessbook.com/, or my WordPress book, "Digging into WordPress" @ http://digwp.com/ 

Links, tweets and likes also appreciated. Thanks! :)
