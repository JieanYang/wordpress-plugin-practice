<?php
/**
 * @package WeworthbuyPlugin
 */
namespace Inc\Pages;

use \Inc\Base\BaseController;
use \Inc\Api\SettingsApi;


/**
 * 
 */
class Admin extends BaseController
{
  public $settings;

  public function __construct()
  {
    $this->settings = new SettingsApi();
  }

  public function register() {
    // add_action('admin_menu', array($this, 'add_admin_pages'));

    $pages = [
      [
      'page_title' => 'Weworthbuy Plugin', 
      'menu_title' => 'Weworthbuy', 
      'capability' => 'manage_options', 
      'menu_slug', 'weworthbuy_plugin', 
      // @BUG
      'callback' => 'admin_index', 
      'icon_url' => 'dashicons-store', 
      'position' => 110
      ]
    ];

    // $this->settings->addPages($this->pages);
    // $this->settings->register();
    $this->settings->addPages($pages)->register();
  }


  //  public function add_admin_pages() {
  //    add_menu_page('Weworthbuy Plugin', 'Weworthbuy', 'manage_options', 'weworthbuy_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
  //  }

  //  public function admin_index() {
  //    require_once $this->plugin_path . 'templates/admin.php';
  //  }
}