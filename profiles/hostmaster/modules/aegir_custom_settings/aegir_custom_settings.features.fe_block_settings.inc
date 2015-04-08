<?php

/**
 * Implementation of hook_default_fe_block_settings().
 */
function aegir_custom_settings_default_fe_block_settings() {
  $export = array();

  // eldir
  $theme = array();

  $theme['menu-menu-administration'] = array(
    'module' => 'menu',
    'delta' => 'menu-administration',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '-7',
    'region' => 'left',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['system-0'] = array(
    'module' => 'system',
    'delta' => '0',
    'theme' => 'eldir',
    'status' => 0,
    'weight' => '-11',
    'region' => '',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['user-0'] = array(
    'module' => 'user',
    'delta' => '0',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '0',
    'region' => 'left',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['user-1'] = array(
    'module' => 'user',
    'delta' => '1',
    'theme' => 'eldir',
    'status' => 0,
    'weight' => '-10',
    'region' => '',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_package_list-block_1'] = array(
    'module' => 'views',
    'delta' => 'hosting_package_list-block_1',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '-11',
    'region' => 'content_bottom',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_site_list-block_1'] = array(
    'module' => 'views',
    'delta' => 'hosting_site_list-block_1',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '-8',
    'region' => 'content_bottom',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_site_list-block_client'] = array(
    'module' => 'views',
    'delta' => 'hosting_site_list-block_client',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '-10',
    'region' => 'content_bottom',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_site_list-block_client2'] = array(
    'module' => 'views',
    'delta' => 'hosting_site_list-block_client2',
    'theme' => 'eldir',
    'status' => 0,
    'weight' => '-9',
    'region' => '',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_site_list-block_profile'] = array(
    'module' => 'views',
    'delta' => 'hosting_site_list-block_profile',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '-7',
    'region' => 'content_bottom',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $theme['views-hosting_task_list-block'] = array(
    'module' => 'views',
    'delta' => 'hosting_task_list-block',
    'theme' => 'eldir',
    'status' => '1',
    'weight' => '0',
    'region' => 'right',
    'custom' => '0',
    'throttle' => '0',
    'visibility' => '0',
    'pages' => '',
    'title' => '',
    'cache' => '-1',
  );

  $export['eldir'] = $theme;

  $theme_default = variable_get('theme_default', 'garland');
  $themes = list_themes();
  foreach ($export as $theme_key => $settings) {
    if ($theme_key != $theme_default && empty($themes[$theme_key]->status)) {
      unset($export[$theme_key]);
    }
  }
  return $export;
}
