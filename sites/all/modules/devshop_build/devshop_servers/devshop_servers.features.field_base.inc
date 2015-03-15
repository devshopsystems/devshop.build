<?php
/**
 * @file
 * devshop_servers.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function devshop_servers_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'devshop_server_ip_address'
  $field_bases['devshop_server_ip_address'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'devshop_server_ip_address',
    'foreign keys' => array(),
    'indexes' => array(
      'range' => array(
        0 => 'start',
        1 => 'end',
      ),
      'start' => array(
        0 => 'start',
      ),
    ),
    'locked' => 0,
    'module' => 'field_ipaddress',
    'settings' => array(),
    'translatable' => 0,
    'type' => 'field_ipaddress',
  );

  // Exported field_base: 'devshop_server_users'
  $field_bases['devshop_server_users'] = array(
    'active' => 1,
    'cardinality' => -1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'devshop_server_users',
    'foreign keys' => array(
      'users' => array(
        'columns' => array(
          'target_id' => 'uid',
        ),
        'table' => 'users',
      ),
    ),
    'indexes' => array(
      'target_id' => array(
        0 => 'target_id',
      ),
    ),
    'locked' => 0,
    'module' => 'entityreference',
    'settings' => array(
      'handler' => 'base',
      'handler_settings' => array(
        'sort' => array(
          'direction' => 'ASC',
          'property' => 'name',
          'type' => 'property',
        ),
        'target_bundles' => array(),
      ),
      'target_type' => 'user',
    ),
    'translatable' => 0,
    'type' => 'entityreference',
  );

  return $field_bases;
}
