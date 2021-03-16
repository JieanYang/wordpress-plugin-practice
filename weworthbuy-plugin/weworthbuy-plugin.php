<?php 
/**
 * @package WeworthbuyPlugin
 */
/**
 * Plugin Name:       Weworthbuy Plugin
 * Description:       Wordpress plugin practice
 * Version:           0.0.1
 * Author:            Jiean yang
 * Author URI:        https://wemediaweb.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       weworthbuy-plugin
 */



if(!defined('ABSPATH')) {
	die;
}

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

if(class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}