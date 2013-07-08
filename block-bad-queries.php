<?php
/*
Plugin Name: Block Bad Queries (BBQ)
Plugin URI: http://perishablepress.com/block-bad-queries/
Description: Automatically protects WordPress against malicious URL requests.
Tags: security, protect, firewall, php, eval, malicious, url, request, blacklist
Usage: No configuration necessary. Upload, activate and done. BBQ blocks bad queries automically to protect your site against malicious URL requests.
Author: Jeff Starr
Author URI: http://monzilla.biz/
Contributors: specialk, aldolat, WpBlogHost, James Wilkes, juliobox
Donate link: http://m0n.co/donate
Requires at least: 3.0
Tested up to: 3.5
Stable tag: 20130707
Version: 20130707
License: GPLv2 or later
*/

$request_uri_array  = apply_filters( 'request_uri_items',  array( 'eval\(', 'UNION\+SELECT', '\(null\)', 'base64_', '\/localhost', '\%2Flocalhost', '\/pingserver', '\/config\.', '\/wwwroot', '\/makefile', 'crossdomain\.', 'proc\/self\/environ', 'etc\/passwd', '\/https\:', '\/http\:', '\/ftp\:', '\/cgi\/', '\.cgi', '\.exe', '\.sql', '\.ini', '\.dll', '\.asp', '\.jsp', '\/\.bash', '\/\.git', '\/\.svn', '\/\.tar', ' ', '\<', '\>', '\/\=', '\.\.\.', '\+\+\+', '\:\/\/', '\/&&', '\/Nt\.', '\.exec\(', '\)\.html\(', '\{x\.html\(', '\(function\(' ) );
$query_string_array = apply_filters( 'query_string_items', array( '\.\.\/', '127\.0\.0\.1', 'localhost', 'loopback', '\%0A', '\%0D', '\%00', '\%2e\%2e', 'input_file', 'execute', 'mosconfig', 'path\=\.', 'mod\=\.' ) );
$user_agent_array   = apply_filters( 'user_agent_items',   array( 'binlar', 'casper', 'cmswor', 'diavol', 'dotbot', 'finder', 'flicky', 'nutch', 'planet', 'purebot', 'pycurl', 'skygrid', 'sucker', 'turnit', 'vikspi', 'zmeu' ) );

if (isset($_SERVER['REQUEST_URI'])) $request_uri_string = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['QUERY_STRING'])) $query_string_string = $_SERVER['QUERY_STRING'];
if (isset($_SERVER['HTTP_USER_AGENT'])) $user_agent_string = $_SERVER['HTTP_USER_AGENT'];

if (
	preg_match( '/' . implode( '|', $request_uri_array )  . '/i', $request_uri_string ) || 
	preg_match( '/' . implode( '|', $query_string_array ) . '/i', $query_string_string ) || 
	preg_match( '/' . implode( '|', $user_agent_array )   . '/i', $user_agent_string ) 
) {
	header('HTTP/1.1 403 Forbidden');
	header('Status: 403 Forbidden');
	header('Connection: Close');
	exit;
} ?>