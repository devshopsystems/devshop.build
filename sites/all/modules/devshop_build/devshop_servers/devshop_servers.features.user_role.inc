<?php
/**
 * @file
 * devshop_servers.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function devshop_servers_user_default_roles() {
  $roles = array();

  // Exported role: system administrator.
  $roles['system administrator'] = array(
    'name' => 'system administrator',
    'weight' => 3,
  );

  return $roles;
}
