<?php

/**
 * Implementation of hook_user_default_roles().
 */
function aegir_custom_settings_user_default_roles() {
  $roles = array();

  // Exported role: admin
  $roles['admin'] = array(
    'name' => 'admin',
  );

  // Exported role: aegir account manager
  $roles['aegir account manager'] = array(
    'name' => 'aegir account manager',
  );

  // Exported role: aegir administrator
  $roles['aegir administrator'] = array(
    'name' => 'aegir administrator',
  );

  // Exported role: aegir client
  $roles['aegir client'] = array(
    'name' => 'aegir client',
  );

  // Exported role: aegir platform manager
  $roles['aegir platform manager'] = array(
    'name' => 'aegir platform manager',
  );

  // Exported role: anonymous user
  $roles['anonymous user'] = array(
    'name' => 'anonymous user',
  );

  // Exported role: authenticated user
  $roles['authenticated user'] = array(
    'name' => 'authenticated user',
  );

  // Exported role: root
  $roles['root'] = array(
    'name' => 'root',
  );

  return $roles;
}
