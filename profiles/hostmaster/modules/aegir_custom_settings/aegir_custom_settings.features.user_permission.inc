<?php

/**
 * Implementation of hook_user_default_permissions().
 */
function aegir_custom_settings_user_default_permissions() {
  $permissions = array();

  // Exported permission: access administration menu
  $permissions['access administration menu'] = array(
    'name' => 'access administration menu',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: access administration pages
  $permissions['access administration pages'] = array(
    'name' => 'access administration pages',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: access all views
  $permissions['access all views'] = array(
    'name' => 'access all views',
    'roles' => array(),
  );

  // Exported permission: access comments
  $permissions['access comments'] = array(
    'name' => 'access comments',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'root',
    ),
  );

  // Exported permission: access content
  $permissions['access content'] = array(
    'name' => 'access content',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'aegir client',
      '3' => 'anonymous user',
      '4' => 'authenticated user',
      '5' => 'root',
    ),
  );

  // Exported permission: access disabled sites
  $permissions['access disabled sites'] = array(
    'name' => 'access disabled sites',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'aegir client',
      '3' => 'anonymous user',
      '4' => 'authenticated user',
      '5' => 'root',
    ),
  );

  // Exported permission: access hosting signup form
  $permissions['access hosting signup form'] = array(
    'name' => 'access hosting signup form',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: access hosting wizard
  $permissions['access hosting wizard'] = array(
    'name' => 'access hosting wizard',
    'roles' => array(),
  );

  // Exported permission: access printer-friendly version
  $permissions['access printer-friendly version'] = array(
    'name' => 'access printer-friendly version',
    'roles' => array(),
  );

  // Exported permission: access site reports
  $permissions['access site reports'] = array(
    'name' => 'access site reports',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: access task logs
  $permissions['access task logs'] = array(
    'name' => 'access task logs',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: access user profiles
  $permissions['access user profiles'] = array(
    'name' => 'access user profiles',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: add content to books
  $permissions['add content to books'] = array(
    'name' => 'add content to books',
    'roles' => array(),
  );

  // Exported permission: administer actions
  $permissions['administer actions'] = array(
    'name' => 'administer actions',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer blocks
  $permissions['administer blocks'] = array(
    'name' => 'administer blocks',
    'roles' => array(),
  );

  // Exported permission: administer book outlines
  $permissions['administer book outlines'] = array(
    'name' => 'administer book outlines',
    'roles' => array(),
  );

  // Exported permission: administer clients
  $permissions['administer clients'] = array(
    'name' => 'administer clients',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: administer comments
  $permissions['administer comments'] = array(
    'name' => 'administer comments',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer content types
  $permissions['administer content types'] = array(
    'name' => 'administer content types',
    'roles' => array(),
  );

  // Exported permission: administer features
  $permissions['administer features'] = array(
    'name' => 'administer features',
    'roles' => array(),
  );

  // Exported permission: administer files
  $permissions['administer files'] = array(
    'name' => 'administer files',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer filters
  $permissions['administer filters'] = array(
    'name' => 'administer filters',
    'roles' => array(),
  );

  // Exported permission: administer hosting
  $permissions['administer hosting'] = array(
    'name' => 'administer hosting',
    'roles' => array(),
  );

  // Exported permission: administer hosting aliases
  $permissions['administer hosting aliases'] = array(
    'name' => 'administer hosting aliases',
    'roles' => array(),
  );

  // Exported permission: administer hosting features
  $permissions['administer hosting features'] = array(
    'name' => 'administer hosting features',
    'roles' => array(),
  );

  // Exported permission: administer hosting queues
  $permissions['administer hosting queues'] = array(
    'name' => 'administer hosting queues',
    'roles' => array(),
  );

  // Exported permission: administer hosting settings
  $permissions['administer hosting settings'] = array(
    'name' => 'administer hosting settings',
    'roles' => array(),
  );

  // Exported permission: administer hosting site backup manager
  $permissions['administer hosting site backup manager'] = array(
    'name' => 'administer hosting site backup manager',
    'roles' => array(),
  );

  // Exported permission: administer menu
  $permissions['administer menu'] = array(
    'name' => 'administer menu',
    'roles' => array(),
  );

  // Exported permission: administer nodes
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: administer permissions
  $permissions['administer permissions'] = array(
    'name' => 'administer permissions',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer platforms
  $permissions['administer platforms'] = array(
    'name' => 'administer platforms',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir platform manager',
      '2' => 'root',
    ),
  );

  // Exported permission: administer servers
  $permissions['administer servers'] = array(
    'name' => 'administer servers',
    'roles' => array(),
  );

  // Exported permission: administer site configuration
  $permissions['administer site configuration'] = array(
    'name' => 'administer site configuration',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer sites
  $permissions['administer sites'] = array(
    'name' => 'administer sites',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: administer tasks
  $permissions['administer tasks'] = array(
    'name' => 'administer tasks',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: administer userprotect
  $permissions['administer userprotect'] = array(
    'name' => 'administer userprotect',
    'roles' => array(),
  );

  // Exported permission: administer users
  $permissions['administer users'] = array(
    'name' => 'administer users',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: administer views
  $permissions['administer views'] = array(
    'name' => 'administer views',
    'roles' => array(),
  );

  // Exported permission: cancel own tasks
  $permissions['cancel own tasks'] = array(
    'name' => 'cancel own tasks',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: change own e-mail
  $permissions['change own e-mail'] = array(
    'name' => 'change own e-mail',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: change own openid
  $permissions['change own openid'] = array(
    'name' => 'change own openid',
    'roles' => array(),
  );

  // Exported permission: change own password
  $permissions['change own password'] = array(
    'name' => 'change own password',
    'roles' => array(
      '0' => 'authenticated user',
    ),
  );

  // Exported permission: change own username
  $permissions['change own username'] = array(
    'name' => 'change own username',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: configure site cron interval
  $permissions['configure site cron interval'] = array(
    'name' => 'configure site cron interval',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'aegir client',
      '3' => 'root',
    ),
  );

  // Exported permission: create backup task
  $permissions['create backup task'] = array(
    'name' => 'create backup task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create backup-delete task
  $permissions['create backup-delete task'] = array(
    'name' => 'create backup-delete task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: create book content
  $permissions['create book content'] = array(
    'name' => 'create book content',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: create client
  $permissions['create client'] = array(
    'name' => 'create client',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'root',
    ),
  );

  // Exported permission: create clone task
  $permissions['create clone task'] = array(
    'name' => 'create clone task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create delete task
  $permissions['create delete task'] = array(
    'name' => 'create delete task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: create disable task
  $permissions['create disable task'] = array(
    'name' => 'create disable task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create enable task
  $permissions['create enable task'] = array(
    'name' => 'create enable task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create flush_cache task
  $permissions['create flush_cache task'] = array(
    'name' => 'create flush_cache task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create flush_drush_cache task
  $permissions['create flush_drush_cache task'] = array(
    'name' => 'create flush_drush_cache task',
    'roles' => array(),
  );

  // Exported permission: create lock task
  $permissions['create lock task'] = array(
    'name' => 'create lock task',
    'roles' => array(),
  );

  // Exported permission: create login-reset task
  $permissions['create login-reset task'] = array(
    'name' => 'create login-reset task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create migrate task
  $permissions['create migrate task'] = array(
    'name' => 'create migrate task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create new books
  $permissions['create new books'] = array(
    'name' => 'create new books',
    'roles' => array(),
  );

  // Exported permission: create package
  $permissions['create package'] = array(
    'name' => 'create package',
    'roles' => array(),
  );

  // Exported permission: create platform
  $permissions['create platform'] = array(
    'name' => 'create platform',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir platform manager',
      '2' => 'root',
    ),
  );

  // Exported permission: create rebuild_registry task
  $permissions['create rebuild_registry task'] = array(
    'name' => 'create rebuild_registry task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create restore task
  $permissions['create restore task'] = array(
    'name' => 'create restore task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create run_cron task
  $permissions['create run_cron task'] = array(
    'name' => 'create run_cron task',
    'roles' => array(),
  );

  // Exported permission: create server
  $permissions['create server'] = array(
    'name' => 'create server',
    'roles' => array(),
  );

  // Exported permission: create site
  $permissions['create site'] = array(
    'name' => 'create site',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create site aliases
  $permissions['create site aliases'] = array(
    'name' => 'create site aliases',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: create site_health_check task
  $permissions['create site_health_check task'] = array(
    'name' => 'create site_health_check task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: create sites on locked platforms
  $permissions['create sites on locked platforms'] = array(
    'name' => 'create sites on locked platforms',
    'roles' => array(),
  );

  // Exported permission: create unlock task
  $permissions['create unlock task'] = array(
    'name' => 'create unlock task',
    'roles' => array(),
  );

  // Exported permission: create update task
  $permissions['create update task'] = array(
    'name' => 'create update task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: create verify task
  $permissions['create verify task'] = array(
    'name' => 'create verify task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: delete any book content
  $permissions['delete any book content'] = array(
    'name' => 'delete any book content',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: delete own book content
  $permissions['delete own book content'] = array(
    'name' => 'delete own book content',
    'roles' => array(),
  );

  // Exported permission: delete own client
  $permissions['delete own client'] = array(
    'name' => 'delete own client',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: delete package
  $permissions['delete package'] = array(
    'name' => 'delete package',
    'roles' => array(),
  );

  // Exported permission: delete platform
  $permissions['delete platform'] = array(
    'name' => 'delete platform',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: delete revisions
  $permissions['delete revisions'] = array(
    'name' => 'delete revisions',
    'roles' => array(),
  );

  // Exported permission: delete server
  $permissions['delete server'] = array(
    'name' => 'delete server',
    'roles' => array(),
  );

  // Exported permission: delete site
  $permissions['delete site'] = array(
    'name' => 'delete site',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: display drupal links
  $permissions['display drupal links'] = array(
    'name' => 'display drupal links',
    'roles' => array(),
  );

  // Exported permission: edit any book content
  $permissions['edit any book content'] = array(
    'name' => 'edit any book content',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: edit client uname
  $permissions['edit client uname'] = array(
    'name' => 'edit client uname',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: edit client users
  $permissions['edit client users'] = array(
    'name' => 'edit client users',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'root',
    ),
  );

  // Exported permission: edit own book content
  $permissions['edit own book content'] = array(
    'name' => 'edit own book content',
    'roles' => array(
      '0' => 'root',
    ),
  );

  // Exported permission: edit own client
  $permissions['edit own client'] = array(
    'name' => 'edit own client',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: edit package
  $permissions['edit package'] = array(
    'name' => 'edit package',
    'roles' => array(),
  );

  // Exported permission: edit platform
  $permissions['edit platform'] = array(
    'name' => 'edit platform',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: edit server
  $permissions['edit server'] = array(
    'name' => 'edit server',
    'roles' => array(),
  );

  // Exported permission: edit site
  $permissions['edit site'] = array(
    'name' => 'edit site',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: execute Ban IP address of current user (user_block_ip_action)
  $permissions['execute Ban IP address of current user (user_block_ip_action)'] = array(
    'name' => 'execute Ban IP address of current user (user_block_ip_action)',
    'roles' => array(),
  );

  // Exported permission: execute Block current user (user_block_user_action)
  $permissions['execute Block current user (user_block_user_action)'] = array(
    'name' => 'execute Block current user (user_block_user_action)',
    'roles' => array(),
  );

  // Exported permission: execute Block the selected users (user_user_operations_block)
  $permissions['execute Block the selected users (user_user_operations_block)'] = array(
    'name' => 'execute Block the selected users (user_user_operations_block)',
    'roles' => array(),
  );

  // Exported permission: execute Change comment settings (views_bulk_operations_comment_setting_action)
  $permissions['execute Change comment settings (views_bulk_operations_comment_setting_action)'] = array(
    'name' => 'execute Change comment settings (views_bulk_operations_comment_setting_action)',
    'roles' => array(),
  );

  // Exported permission: execute Change the author of a post (node_assign_owner_action)
  $permissions['execute Change the author of a post (node_assign_owner_action)'] = array(
    'name' => 'execute Change the author of a post (node_assign_owner_action)',
    'roles' => array(),
  );

  // Exported permission: execute Delete comment (views_bulk_operations_delete_comment_action)
  $permissions['execute Delete comment (views_bulk_operations_delete_comment_action)'] = array(
    'name' => 'execute Delete comment (views_bulk_operations_delete_comment_action)',
    'roles' => array(),
  );

  // Exported permission: execute Delete node (views_bulk_operations_delete_node_action)
  $permissions['execute Delete node (views_bulk_operations_delete_node_action)'] = array(
    'name' => 'execute Delete node (views_bulk_operations_delete_node_action)',
    'roles' => array(),
  );

  // Exported permission: execute Delete term (views_bulk_operations_delete_term_action)
  $permissions['execute Delete term (views_bulk_operations_delete_term_action)'] = array(
    'name' => 'execute Delete term (views_bulk_operations_delete_term_action)',
    'roles' => array(),
  );

  // Exported permission: execute Delete user (views_bulk_operations_delete_user_action)
  $permissions['execute Delete user (views_bulk_operations_delete_user_action)'] = array(
    'name' => 'execute Delete user (views_bulk_operations_delete_user_action)',
    'roles' => array(),
  );

  // Exported permission: execute Demote from front page (node_mass_update)
  $permissions['execute Demote from front page (node_mass_update)'] = array(
    'name' => 'execute Demote from front page (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Display a message to the user (system_message_action)
  $permissions['execute Display a message to the user (system_message_action)'] = array(
    'name' => 'execute Display a message to the user (system_message_action)',
    'roles' => array(),
  );

  // Exported permission: execute Download archive of selected files (views_bulk_operations_archive_action)
  $permissions['execute Download archive of selected files (views_bulk_operations_archive_action)'] = array(
    'name' => 'execute Download archive of selected files (views_bulk_operations_archive_action)',
    'roles' => array(),
  );

  // Exported permission: execute Execute a VBO programmatically (views_bulk_operations_action)
  $permissions['execute Execute a VBO programmatically (views_bulk_operations_action)'] = array(
    'name' => 'execute Execute a VBO programmatically (views_bulk_operations_action)',
    'roles' => array(),
  );

  // Exported permission: execute Execute arbitrary PHP script (views_bulk_operations_script_action)
  $permissions['execute Execute arbitrary PHP script (views_bulk_operations_script_action)'] = array(
    'name' => 'execute Execute arbitrary PHP script (views_bulk_operations_script_action)',
    'roles' => array(),
  );

  // Exported permission: execute Make post sticky (node_make_sticky_action)
  $permissions['execute Make post sticky (node_make_sticky_action)'] = array(
    'name' => 'execute Make post sticky (node_make_sticky_action)',
    'roles' => array(),
  );

  // Exported permission: execute Make post unsticky (node_make_unsticky_action)
  $permissions['execute Make post unsticky (node_make_unsticky_action)'] = array(
    'name' => 'execute Make post unsticky (node_make_unsticky_action)',
    'roles' => array(),
  );

  // Exported permission: execute Make sticky (node_mass_update)
  $permissions['execute Make sticky (node_mass_update)'] = array(
    'name' => 'execute Make sticky (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Modify user roles (views_bulk_operations_user_roles_action)
  $permissions['execute Modify user roles (views_bulk_operations_user_roles_action)'] = array(
    'name' => 'execute Modify user roles (views_bulk_operations_user_roles_action)',
    'roles' => array(),
  );

  // Exported permission: execute Move book page to new parent (views_bulk_operations_move_book_action)
  $permissions['execute Move book page to new parent (views_bulk_operations_move_book_action)'] = array(
    'name' => 'execute Move book page to new parent (views_bulk_operations_move_book_action)',
    'roles' => array(),
  );

  // Exported permission: execute Pass objects as arguments to a page (views_bulk_operations_argument_selector_action)
  $permissions['execute Pass objects as arguments to a page (views_bulk_operations_argument_selector_action)'] = array(
    'name' => 'execute Pass objects as arguments to a page (views_bulk_operations_argument_selector_action)',
    'roles' => array(),
  );

  // Exported permission: execute Platform: Delete (hosting_platform_op_delete)
  $permissions['execute Platform: Delete (hosting_platform_op_delete)'] = array(
    'name' => 'execute Platform: Delete (hosting_platform_op_delete)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir platform manager',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Platform: Lock (hosting_platform_op_lock)
  $permissions['execute Platform: Lock (hosting_platform_op_lock)'] = array(
    'name' => 'execute Platform: Lock (hosting_platform_op_lock)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir platform manager',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Platform: Unlock (hosting_platform_op_unlock)
  $permissions['execute Platform: Unlock (hosting_platform_op_unlock)'] = array(
    'name' => 'execute Platform: Unlock (hosting_platform_op_unlock)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir platform manager',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Platform: Verify (hosting_platform_op_verify)
  $permissions['execute Platform: Verify (hosting_platform_op_verify)'] = array(
    'name' => 'execute Platform: Verify (hosting_platform_op_verify)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir platform manager',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Promote post to front page (node_promote_action)
  $permissions['execute Promote post to front page (node_promote_action)'] = array(
    'name' => 'execute Promote post to front page (node_promote_action)',
    'roles' => array(),
  );

  // Exported permission: execute Promote to front page (node_mass_update)
  $permissions['execute Promote to front page (node_mass_update)'] = array(
    'name' => 'execute Promote to front page (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Publish (node_mass_update)
  $permissions['execute Publish (node_mass_update)'] = array(
    'name' => 'execute Publish (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Publish comment (comment_publish_action)
  $permissions['execute Publish comment (comment_publish_action)'] = array(
    'name' => 'execute Publish comment (comment_publish_action)',
    'roles' => array(),
  );

  // Exported permission: execute Publish post (node_publish_action)
  $permissions['execute Publish post (node_publish_action)'] = array(
    'name' => 'execute Publish post (node_publish_action)',
    'roles' => array(),
  );

  // Exported permission: execute Redirect to URL (system_goto_action)
  $permissions['execute Redirect to URL (system_goto_action)'] = array(
    'name' => 'execute Redirect to URL (system_goto_action)',
    'roles' => array(),
  );

  // Exported permission: execute Remove book page from outline (views_bulk_operations_remove_book_action)
  $permissions['execute Remove book page from outline (views_bulk_operations_remove_book_action)'] = array(
    'name' => 'execute Remove book page from outline (views_bulk_operations_remove_book_action)',
    'roles' => array(),
  );

  // Exported permission: execute Remove post from front page (node_unpromote_action)
  $permissions['execute Remove post from front page (node_unpromote_action)'] = array(
    'name' => 'execute Remove post from front page (node_unpromote_action)',
    'roles' => array(),
  );

  // Exported permission: execute Remove stickiness (node_mass_update)
  $permissions['execute Remove stickiness (node_mass_update)'] = array(
    'name' => 'execute Remove stickiness (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Save post (node_save_action)
  $permissions['execute Save post (node_save_action)'] = array(
    'name' => 'execute Save post (node_save_action)',
    'roles' => array(),
  );

  // Exported permission: execute Send e-mail (system_send_email_action)
  $permissions['execute Send e-mail (system_send_email_action)'] = array(
    'name' => 'execute Send e-mail (system_send_email_action)',
    'roles' => array(),
  );

  // Exported permission: execute Site: Backup (hosting_site_op_backup)
  $permissions['execute Site: Backup (hosting_site_op_backup)'] = array(
    'name' => 'execute Site: Backup (hosting_site_op_backup)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir client',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Site: Delete (hosting_site_op_delete)
  $permissions['execute Site: Delete (hosting_site_op_delete)'] = array(
    'name' => 'execute Site: Delete (hosting_site_op_delete)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir platform manager',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Site: Disable (hosting_site_op_disable)
  $permissions['execute Site: Disable (hosting_site_op_disable)'] = array(
    'name' => 'execute Site: Disable (hosting_site_op_disable)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir client',
      '3' => 'aegir platform manager',
      '4' => 'root',
    ),
  );

  // Exported permission: execute Site: Enable (hosting_site_op_enable)
  $permissions['execute Site: Enable (hosting_site_op_enable)'] = array(
    'name' => 'execute Site: Enable (hosting_site_op_enable)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir client',
      '3' => 'aegir platform manager',
      '4' => 'root',
    ),
  );

  // Exported permission: execute Site: Reset password (hosting_site_op_login_reset)
  $permissions['execute Site: Reset password (hosting_site_op_login_reset)'] = array(
    'name' => 'execute Site: Reset password (hosting_site_op_login_reset)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir client',
      '3' => 'root',
    ),
  );

  // Exported permission: execute Site: Verify (hosting_site_op_verify)
  $permissions['execute Site: Verify (hosting_site_op_verify)'] = array(
    'name' => 'execute Site: Verify (hosting_site_op_verify)',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir administrator',
      '2' => 'aegir client',
      '3' => 'aegir platform manager',
      '4' => 'root',
    ),
  );

  // Exported permission: execute Unblock the selected users (user_user_operations_unblock)
  $permissions['execute Unblock the selected users (user_user_operations_unblock)'] = array(
    'name' => 'execute Unblock the selected users (user_user_operations_unblock)',
    'roles' => array(),
  );

  // Exported permission: execute Unpublish (node_mass_update)
  $permissions['execute Unpublish (node_mass_update)'] = array(
    'name' => 'execute Unpublish (node_mass_update)',
    'roles' => array(),
  );

  // Exported permission: execute Unpublish comment (comment_unpublish_action)
  $permissions['execute Unpublish comment (comment_unpublish_action)'] = array(
    'name' => 'execute Unpublish comment (comment_unpublish_action)',
    'roles' => array(),
  );

  // Exported permission: execute Unpublish comment containing keyword(s) (comment_unpublish_by_keyword_action)
  $permissions['execute Unpublish comment containing keyword(s) (comment_unpublish_by_keyword_action)'] = array(
    'name' => 'execute Unpublish comment containing keyword(s) (comment_unpublish_by_keyword_action)',
    'roles' => array(),
  );

  // Exported permission: execute Unpublish post (node_unpublish_action)
  $permissions['execute Unpublish post (node_unpublish_action)'] = array(
    'name' => 'execute Unpublish post (node_unpublish_action)',
    'roles' => array(),
  );

  // Exported permission: execute Unpublish post containing keyword(s) (node_unpublish_by_keyword_action)
  $permissions['execute Unpublish post containing keyword(s) (node_unpublish_by_keyword_action)'] = array(
    'name' => 'execute Unpublish post containing keyword(s) (node_unpublish_by_keyword_action)',
    'roles' => array(),
  );

  // Exported permission: manage features
  $permissions['manage features'] = array(
    'name' => 'manage features',
    'roles' => array(),
  );

  // Exported permission: mass delete revisions
  $permissions['mass delete revisions'] = array(
    'name' => 'mass delete revisions',
    'roles' => array(),
  );

  // Exported permission: post comments
  $permissions['post comments'] = array(
    'name' => 'post comments',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
    ),
  );

  // Exported permission: post comments without approval
  $permissions['post comments without approval'] = array(
    'name' => 'post comments without approval',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
    ),
  );

  // Exported permission: retry failed tasks
  $permissions['retry failed tasks'] = array(
    'name' => 'retry failed tasks',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: revert revisions
  $permissions['revert revisions'] = array(
    'name' => 'revert revisions',
    'roles' => array(),
  );

  // Exported permission: select different theme
  $permissions['select different theme'] = array(
    'name' => 'select different theme',
    'roles' => array(),
  );

  // Exported permission: update status of tasks
  $permissions['update status of tasks'] = array(
    'name' => 'update status of tasks',
    'roles' => array(
      '0' => 'aegir administrator',
    ),
  );

  // Exported permission: use PHP for block visibility
  $permissions['use PHP for block visibility'] = array(
    'name' => 'use PHP for block visibility',
    'roles' => array(),
  );

  // Exported permission: view client
  $permissions['view client'] = array(
    'name' => 'view client',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'aegir client',
      '3' => 'root',
    ),
  );

  // Exported permission: view locked platforms
  $permissions['view locked platforms'] = array(
    'name' => 'view locked platforms',
    'roles' => array(),
  );

  // Exported permission: view own tasks
  $permissions['view own tasks'] = array(
    'name' => 'view own tasks',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: view package
  $permissions['view package'] = array(
    'name' => 'view package',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir account manager',
      '2' => 'aegir administrator',
      '3' => 'aegir client',
      '4' => 'aegir platform manager',
      '5' => 'root',
    ),
  );

  // Exported permission: view platform
  $permissions['view platform'] = array(
    'name' => 'view platform',
    'roles' => array(
      '0' => 'admin',
      '1' => 'root',
    ),
  );

  // Exported permission: view revisions
  $permissions['view revisions'] = array(
    'name' => 'view revisions',
    'roles' => array(),
  );

  // Exported permission: view server
  $permissions['view server'] = array(
    'name' => 'view server',
    'roles' => array(),
  );

  // Exported permission: view site
  $permissions['view site'] = array(
    'name' => 'view site',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  // Exported permission: view task
  $permissions['view task'] = array(
    'name' => 'view task',
    'roles' => array(
      '0' => 'admin',
      '1' => 'aegir client',
      '2' => 'root',
    ),
  );

  return $permissions;
}
