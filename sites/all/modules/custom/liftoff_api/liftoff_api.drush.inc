<?php

function liftoff_api_post_hosting_install_task($task, $data) {
  watchdog('albatross', '$task liftoff_api_post_hosting_install_task <pre>!a</pre>', array('!a' => print_r($task, 1)));
  watchdog('albatross', '$data liftoff_api_post_hosting_install_task <pre>!a</pre>', array('!a' => print_r($data, 1)));
  if ($task->ref->type == 'site') {
    $target = $task->task_args['target_platform'];
    $clone = new stdClass();
    # copy some of the settings of the cloned site ($task->ref) to $clone
    foreach (array('type', 'status', 'uid', 'comment', 'promote', 'moderate', 'sticky', 'name', 'format', 'client', 'db_server', 'profile', 'site_status', 'site_language') as $field) {
      $clone->$field = $task->ref->$field;
    }
    $clone->title = strtolower(trim($task->task_args['new_uri']));
    $clone->hosting_name = $clone->title;
    $clone->platform = $target;
    $clone->import = 1; # make sure the site doesn't reinstall...
    $clone->verified = 0; # ... and it does verify
    $clone->aliases = isset($task->task_args['aliases']) ? $task->task_args['aliases'] : array();
    $clone->redirection = isset($task->task_args['redirection']) ? $task->task_args['redirection'] : FALSE;
    
    if ($clone->db_server != $task->task_args['new_db_server']) {
      $clone->db_server = $task->task_args['new_db_server'];
    }

    $profile = hosting_package_instance_load(array(
      'i.rid' => $target,
      'p.short_name' => $data['context']['profile']
    ));
    if ($profile) {
      $clone->profile = $profile->package_id;
    }
    
    watchdog('albatross', '$clone liftoff_api_post_hosting_install_task <pre>!a</pre>', array('!a' => print_r($clone, 1)));

    //node_save($clone);

    // Record the backup created during clone.
    $task->task_args['description'] = t('Pre-clone backup');
    hosting_site_post_hosting_backup_task($task, $data);
  }
}
