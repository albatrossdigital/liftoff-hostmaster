<?php
/**
 * @file
 *   Expose the cdn feature to hostmaster.
 */

/**
 * Implementation of hook_hosting_feature().
 */
function hosting_cdn_hosting_feature() {
  $features['cdn'] = array(
    'title' => t('Local CDN support'),
    'description' => t('Provide multiple domain names for sites cdn resources to be accessible by.'),
    'status' => HOSTING_FEATURE_DISABLED,
    'module' => 'hosting_cdn',
    'group' => 'experimental'
    );
  return $features;
}
