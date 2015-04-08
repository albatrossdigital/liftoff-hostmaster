<?php
/**
 * @file
 *   Drush include for the hosting_cdn module.
 */

function drush_hosting_cdn_pre_hosting_task() {
  if (module_exists('hosting_cdn')) {
    $task =& drush_get_context('HOSTING_TASK');
    if ($task->ref->type == 'site') {
      $cdn = implode(',', hosting_cdn_get_cdn($task->ref));
      $task->context_options['cdn'] = ($cdn) ? $cdn : array();
    }
  }
}

/**
 * Implementation of hook_drush_context_import().
 *
 * If we're importing a site, then import the cdn settings.
 */
function hosting_cdn_drush_context_import($context, &$node) {
  if ($context->type == 'site') {
    $node->cdn = $context->cdn;
  }
}
