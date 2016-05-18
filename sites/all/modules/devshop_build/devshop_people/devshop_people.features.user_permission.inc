<?php
/**
 * @file
 * devshop_people.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function devshop_people_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'access site-wide contact form'.
  $permissions['access site-wide contact form'] = array(
    'name' => 'access site-wide contact form',
    'roles' => array(
      'Drupal Administrator' => 'Drupal Administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'contact',
  );

  return $permissions;
}
