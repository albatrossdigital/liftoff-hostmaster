<?php

/**
 * Access plugin that provides access control for package views.
 */
class views_plugin_access_hosting_package extends views_plugin_access {

  /**
   * Return a string to display as the clickable title for the
   * access control.
   */
  function summary_title() {
    return t('Hosting package');
  }

  /**
   * Determine the access callback and arguments.
   *
   * This information will be embedded in the menu in order to reduce
   * performance hits during menu item access testing, which happens
   * a lot.
   *
   * @return an array; the first item should be the function to call,
   *   and the second item should be an array of arguments. The first
   *   item may also be TRUE (bool only) which will indicate no
   *   access control.)
   */
  function get_access_callback() {
    return array('hosting_package_views_access', array($this->display->display_plugin, $this->display->id));
  }

  /**
   * Determine if the current user has access or not.
   */
  function access($account) {
    return hosting_package_views_access($this->display->display_plugin, $this->display->id, $account);
  }

}

