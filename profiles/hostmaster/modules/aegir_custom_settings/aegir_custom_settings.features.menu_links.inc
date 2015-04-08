<?php

/**
 * Implementation of hook_menu_default_menu_links().
 */
function aegir_custom_settings_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-administration:admin/user/user
  $menu_links['menu-administration:admin/user/user'] = array(
    'menu_name' => 'menu-administration',
    'link_path' => 'admin/user/user',
    'router_path' => 'admin/user/user',
    'link_title' => 'Manage Users',
    'options' => array(
      'attributes' => array(
        'title' => 'Manage Users',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-48',
  );
  // Exported menu link: menu-administration:node/add/platform
  $menu_links['menu-administration:node/add/platform'] = array(
    'menu_name' => 'menu-administration',
    'link_path' => 'node/add/platform',
    'router_path' => 'node/add/platform',
    'link_title' => 'Add New Platform',
    'options' => array(
      'attributes' => array(
        'title' => 'Add New Platform',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
  );
  // Exported menu link: menu-administration:node/add/site
  $menu_links['menu-administration:node/add/site'] = array(
    'menu_name' => 'menu-administration',
    'link_path' => 'node/add/site',
    'router_path' => 'node/add/site',
    'link_title' => 'Add New Site',
    'options' => array(
      'attributes' => array(
        'title' => 'Add New Site',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
  );
  // Exported menu link: primary-links:hosting/clients
  $menu_links['primary-links:hosting/clients'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'hosting/clients',
    'router_path' => 'hosting/clients',
    'link_title' => 'Clients',
    'options' => array(
      'attributes' => array(
        'title' => 'List of clients',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: primary-links:hosting/platforms
  $menu_links['primary-links:hosting/platforms'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'hosting/platforms',
    'router_path' => 'hosting/platforms',
    'link_title' => 'Platforms',
    'options' => array(
      'attributes' => array(
        'title' => 'List of platforms',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '1',
  );
  // Exported menu link: primary-links:hosting/servers
  $menu_links['primary-links:hosting/servers'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'hosting/servers',
    'router_path' => 'hosting/servers',
    'link_title' => 'Servers',
    'options' => array(
      'attributes' => array(
        'title' => 'List of servers',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '0',
  );
  // Exported menu link: primary-links:hosting/sites
  $menu_links['primary-links:hosting/sites'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'hosting/sites',
    'router_path' => 'hosting/sites',
    'link_title' => 'Sites',
    'options' => array(
      'attributes' => array(
        'title' => 'List of sites',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '2',
  );
  // Exported menu link: primary-links:logout
  $menu_links['primary-links:logout'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'logout',
    'router_path' => 'logout',
    'link_title' => 'Exit',
    'options' => array(
      'attributes' => array(
        'title' => 'Log out',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-50',
  );
  // Exported menu link: primary-links:user/%
  $menu_links['primary-links:user/%'] = array(
    'menu_name' => 'primary-links',
    'link_path' => 'user/%',
    'router_path' => 'user/%',
    'link_title' => 'Account',
    'options' => array(
      'attributes' => array(
        'title' => 'My Account',
      ),
    ),
    'module' => 'system',
    'hidden' => '0',
    'external' => '0',
    'has_children' => '0',
    'expanded' => '0',
    'weight' => '-49',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Account');
  t('Add New Platform');
  t('Add New Site');
  t('Clients');
  t('Exit');
  t('Manage Users');
  t('Platforms');
  t('Servers');
  t('Sites');


  return $menu_links;
}
