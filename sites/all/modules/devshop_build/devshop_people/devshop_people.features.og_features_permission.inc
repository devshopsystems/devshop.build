<?php
/**
 * @file
 * devshop_people.features.og_features_permission.inc
 */

/**
 * Implements hook_og_features_default_permissions().
 */
function devshop_people_og_features_default_permissions() {
  $permissions = array();

  // Exported og permission: 'node:organization:update field_root_server_user field'
  $permissions['node:organization:update field_root_server_user field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view field_root_server_user field'
  $permissions['node:organization:view field_root_server_user field'] = array(
    'roles' => array(),
  );

  return $permissions;
}
