<?php

/**
 * Implementation of hook_hosting_site_context_options().
 */
function hosting_civicrm_hosting_site_context_options(&$task) {
  if (isset($task->ref->civicrm_version) && !empty($task->ref->civicrm_version)) {
    $task->context_options['civicrm_version'] = $task->ref->civicrm_version;
  }
  else {
    $task->context_options['civicrm_version'] = 'null';
  }
}

/**
 * Implementation of hook_drush_context_import().
 */
function hosting_civicrm_drush_context_import($context, &$node) {
  if ($context->type == 'site') {
    if (isset($context->civicrm_version) && !empty($context->civicrm_version)) {
      $node->civicrm_version = $context->civicrm_version;
    }
  }

}
