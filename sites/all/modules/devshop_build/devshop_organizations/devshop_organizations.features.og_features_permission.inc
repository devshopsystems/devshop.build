<?php
/**
 * @file
 * devshop_organizations.features.og_features_permission.inc
 */

/**
 * Implements hook_og_features_default_permissions().
 */
function devshop_organizations_og_features_default_permissions() {
  $permissions = array();

  // Exported og permission: 'node:organization:add user'
  $permissions['node:organization:add user'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:administer group'
  $permissions['node:organization:administer group'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:approve and deny subscription'
  $permissions['node:organization:approve and deny subscription'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:create server content'
  $permissions['node:organization:create server content'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:delete any server content'
  $permissions['node:organization:delete any server content'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:delete own server content'
  $permissions['node:organization:delete own server content'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:manage members'
  $permissions['node:organization:manage members'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:manage permissions'
  $permissions['node:organization:manage permissions'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:manage roles'
  $permissions['node:organization:manage roles'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:subscribe'
  $permissions['node:organization:subscribe'] = array(
    'roles' => array(
      'non-member' => 'non-member',
    ),
  );

  // Exported og permission: 'node:organization:subscribe without approval'
  $permissions['node:organization:subscribe without approval'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:unsubscribe'
  $permissions['node:organization:unsubscribe'] = array(
    'roles' => array(
      'member' => 'member',
    ),
  );

  // Exported og permission: 'node:organization:update any server content'
  $permissions['node:organization:update any server content'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:update devshop_content_access field'
  $permissions['node:organization:update devshop_content_access field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:update devshop_organization field'
  $permissions['node:organization:update devshop_organization field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
      'member' => 'member',
    ),
  );

  // Exported og permission: 'node:organization:update field_logo field'
  $permissions['node:organization:update field_logo field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:update field_organization_name field'
  $permissions['node:organization:update field_organization_name field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:update field_url field'
  $permissions['node:organization:update field_url field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:update field_user_organizations field'
  $permissions['node:organization:update field_user_organizations field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:update group'
  $permissions['node:organization:update group'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:update group_access field'
  $permissions['node:organization:update group_access field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:update group_group field'
  $permissions['node:organization:update group_group field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:update own server content'
  $permissions['node:organization:update own server content'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
    ),
  );

  // Exported og permission: 'node:organization:view devshop_content_access field'
  $permissions['node:organization:view devshop_content_access field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view devshop_organization field'
  $permissions['node:organization:view devshop_organization field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
      'member' => 'member',
    ),
  );

  // Exported og permission: 'node:organization:view field_logo field'
  $permissions['node:organization:view field_logo field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
      'member' => 'member',
      'non-member' => 'non-member',
    ),
  );

  // Exported og permission: 'node:organization:view field_organization_name field'
  $permissions['node:organization:view field_organization_name field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view field_url field'
  $permissions['node:organization:view field_url field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view field_user_organizations field'
  $permissions['node:organization:view field_user_organizations field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view group_access field'
  $permissions['node:organization:view group_access field'] = array(
    'roles' => array(),
  );

  // Exported og permission: 'node:organization:view group_group field'
  $permissions['node:organization:view group_group field'] = array(
    'roles' => array(
      'administrator member' => 'administrator member',
      'member' => 'member',
      'non-member' => 'non-member',
    ),
  );

  return $permissions;
}
