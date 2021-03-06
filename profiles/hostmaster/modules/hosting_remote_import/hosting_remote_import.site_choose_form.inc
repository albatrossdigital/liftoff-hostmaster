<?php

/**
 * Form to select exactly which site to import.
 */
function hosting_remote_import_sites_choose_site_form(&$form_state, $server, $vid) {
  $form = array();
  $sites = array();
  $result = db_query('SELECT site FROM {remote_import_sites} WHERE tid = %d ORDER BY site ASC', $vid);
  while ($row = db_fetch_object($result)) {
    $sites[$row->site] = $row->site;
  }
  
  $form['nid'] = array(
    '#type' => 'value',
    '#value' => $server->nid,
  );
  
  $form['vid'] = array(
    '#type' => 'value',
    '#value' => $vid,
  );
  
  $form['site'] = array(
    '#type' => 'radios',
    '#title' => t('Select the site to import'),
    '#description' => t('These are all the active sites on the remote server, choose one to import. You\'ll be given options such as the target platform on the next screen.'),
    '#options' => $sites,
    '#required' => TRUE,
  );
  
  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Next >'),
  );
  
  return $form;
}

/**
 * Simple submit handler that does a redirect.
 *
 * @see hosting_remote_import_sites_choose_site_form()
 */
function hosting_remote_import_sites_choose_site_form_submit($form, &$form_state) {
  $values = $form_state['values'];
  // Just build a redirect
  $form_state['redirect'] = 'node/' . $values['nid'] . '/import-sites/platform/' . $values['vid'] . '/' . $values['site'] . '/' . drupal_get_token($values['vid'] . '/' . $values['site']);
}
