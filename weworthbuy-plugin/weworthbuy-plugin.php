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


// If this file is called frectly, abort!!!
if(!defined('ABSPATH')) {
	die;
}

// Require once the Composer Autoload
if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
	require_once dirname(__FILE__) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activate
 */
function activate_weworthbuy_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_weworthbuy_plugin');

/**
 * The code that runs during plugin deactivate
 */
function deactivate_weworthbuy_plugin() {
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_weworthbuy_plugin');

/**
 * Initialze all the core classes of the plugin
 */
if(class_exists('Inc\\Init')) {
	Inc\Init::register_services();
}