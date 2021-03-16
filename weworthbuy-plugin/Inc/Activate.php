<?php 
/**
 * @package WeworthbuyPlugin
 */
namespace Inc;



class Activate
{
	public static function activate() {
		// generated  a CPT(Custom Post Type)
		// flush rewrite rules

		flush_rewrite_rules();
	}
}
