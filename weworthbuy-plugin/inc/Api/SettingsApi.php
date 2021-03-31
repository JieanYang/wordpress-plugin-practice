<?php
/**
 * @package WeworthbuyPlugin
 */
namespace Inc\Api;


class SettingsApi
{
  
  public $admin_pages = array();

  public function register()
  {
    if(!empty($this->admin_pages)) {
      add_action('admin_menu', array($this, 'addAdminMenu'));
    }
  }

  public function addPages(array $pages) 
  {

    $this->admin_pages = $pages;

    return $this;
  }

  public function addAdminMenu()
  {
    add_menu_page('Weworthbuy Plugin', 'Weworthbuy', 'manage_options', 'weworthbuy_plugin', array($this, 'admin_index'), 'dashicons-store', 110);
    // echo "<pre>";
    // echo var_dump($this->admin_pages);
    // echo "</pre>";
    // echo "<br>";
    // echo "<br>";
    // echo 'Yang';
    // echo "<br>";
    // echo "<br>";

    // @BUG
    foreach($this->admin_pages as $page) {
      // echo "<pre>";
      // echo var_dump($page);
      // echo "</pre>";

      // echo "<br>";
      // echo $page['page_title'];
      // echo "<br>";
      // echo $page['menu_title'];
      // echo "<br>";
      // echo $page['capability'];
      // echo "<br>";
      // echo $page['menu_slug'];
      // echo "<br>";
      // echo $page['callback'];
      // echo "<br>";
      // echo $page['icon_url'];
      // echo "<br>";
      // echo $page['position'];
      // echo "<br>";
      // add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], array($this, 'admin_index'), $page['icon_url'], $page['position']);
      // add_menu_page($page['page_title'], $page['menu_title'], $page['capability'], $page['menu_slug'], $page['callback'], $page['icon_url'], $page['position']);
    }
  }

  public function admin_index() {
    echo "<h1>Yang</h1>";
  }
}