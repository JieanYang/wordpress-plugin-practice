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


 class WeworthbuyPlugin 
 {

 	function register() {
 		add_action('admin_enqueue_scripts', array($this, 'enqueue'));
 	}


 	protected function create_post_type() {
		add_action('init', array($this, 'custom_post_type'));
 	}


 	function custom_post_type() {
 		register_post_type('book', ['public' => true, 'label' => 'Books' ]);

 	}


 	function enqueue() {
 		// enqueue all our scripts
 		wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
 		wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));


 	}

 }



 if(class_exists('WeworthbuyPlugin')) {
 	$weworthbuyPlugin = new WeworthbuyPlugin();
 	$weworthbuyPlugin->register();
 }



// activation
require_once plugin_dir_path(__File__) . 'inc/weworthbuy-plugin-activate.php';
register_activation_hook(__FILE__, array('WeworthbuyPluginActivate', 'activate'));


// deactivation
require_once plugin_dir_path(__File__) . 'inc/weworthbuy-plugin-deactivate.php';
register_deactivation_hook(__FILE__, array('WeworthbuyPluginDeactivate', 'deactivate'));



// uninstall
// register_uninstall_hook(__FILE__, array($weworthbuyPlugin, 'uninstall'));





