<?php
/**
 * @file
 * devshop_servers.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function devshop_servers_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create server content'.
  $permissions['create server content'] = array(
    'name' => 'create server content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete any server content'.
  $permissions['delete any server content'] = array(
    'name' => 'delete any server content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete own server content'.
  $permissions['delete own server content'] = array(
    'name' => 'delete own server content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit any server content'.
  $permissions['edit any server content'] = array(
    'name' => 'edit any server content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit own server content'.
  $permissions['edit own server content'] = array(
    'name' => 'edit own server content',
    'roles' => array(),
    'module' => 'node',
  );

  return $permissions;
}
