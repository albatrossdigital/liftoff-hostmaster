<?php



function liftoff_api_pre_hosting_task($task) {
  watchdog('albatross', 'TASK liftoff_api_pre_hosting_task <pre>!a</pre>', array('!a' => print_r($task, 1)));
  $task =& drush_get_context('HOSTING_TASK');
  if ($task->ref->type == 'site' && $task->task_type == 'add_user') {
    $task->args[2] = $task->task_args['user'];
    $task->args[3] = $task->task_args['mail'];
    $task->args[4] = $task->task_args['role'];
  }
}