<?php 
/**
 * @package WeworthbuyPlugin
 */
/**
 * Plugin Name:       Weworthbuy Plugin
 <!-- * Plugin URI:        https://example.com/plugins/the-basics/ -->
 <!-- * Description:       Handle the basics with this plugin. -->
 * Version:           0.0.1
 <!-- * Requires at least: 5.2 -->
 <!-- * Requires PHP:      7.2 -->
 * Author:            Jiean yang
 <!-- * Author URI:        https://author.example.com/ -->
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       weworthbuy-plugin
 <!-- * Domain Path:       /languages -->
 */



 if(!defined('ABSPATH')) {
 	die;
 }


 class WeworthbuyPlugin 
 {

 	static function register() {
 		add_action('admin_enqueue_scripts', array( 'WeworthbuyPlugin', 'enqueue'));
 	}


 	protected function create_post_type() {
		add_action('init', array($this, 'custom_post_type'));
 	}


 	function activate() {
 		// generated  a CPT(Custom Post Type)
 		$this->custom_post_type();
 		// flush rewrite rules
 		flush_rewrite_rules();
 	}

 	function deactivate() {
 		// flush rewrite rules
 		flush_rewrite_rules();
 	}

 	// function uninstall() {
 		// delete CPT
 		// delete all the plugin data from the DB(Database)
 	// }

 	function custom_post_type() {
 		register_post_type('book', ['public' => true, 'label' => 'Books' ]);

 	}


 	static function enqueue() {
 		// enqueue all our scripts
 		wp_enqueue_style('mypluginstyle', plugins_url('/assets/mystyle.css', __FILE__));
 		wp_enqueue_script('mypluginscript', plugins_url('/assets/myscript.js', __FILE__));


 	}

 }



 if(class_exists('WeworthbuyPlugin')) {
 	// $weworthbuyPlugin = new WeworthbuyPlugin();
 	// $weworthbuyPlugin->register();
 	WeworthbuyPlugin::register();
 }



// activation
// register_activation_hook(__FILE__, array($weworthbuyPlugin, 'activate'));


// deactivation
// register_deactivation_hook(__FILE__, array($weworthbuyPlugin, 'deactivate'));








