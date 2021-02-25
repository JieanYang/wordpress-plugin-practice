<?php 
/**
 * @package WeworthbuyPlugin
 */


class WeworthbuyPluginDeactivate
{
	public static function deactivate() {
		// flush rewrite rules
		flush_rewrite_rules();
	}
}