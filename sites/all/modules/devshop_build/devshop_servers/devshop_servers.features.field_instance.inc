<?php
/**
 * @file
 * devshop_servers.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function devshop_servers_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'node-server-devshop_server_ip_address'
  $field_instances['node-server-devshop_server_ip_address'] = array(
    'bundle' => 'server',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Enter the IP addresses for this server. You may leave this blank and we will lookup the IPs based on the hostname.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'field_ipaddress',
        'settings' => array(),
        'type' => 'field_ipaddress_cidr',
        'weight' => 0,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'devshop_server_ip_address',
    'label' => 'IP Addresses',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'field_ipaddress',
      'settings' => array(),
      'type' => 'field_ipaddress_shorthand',
      'weight' => -4,
    ),
  );

  // Exported field_instance: 'node-server-devshop_server_users'
  $field_instances['node-server-devshop_server_users'] = array(
    'bundle' => 'server',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Select the users that should be allowed access to this server.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 1,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'devshop_server_users',
    'label' => 'Server Users',
    'required' => 0,
    'settings' => array(
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'active' => 1,
      'module' => 'entityreference',
      'settings' => array(
        'match_operator' => 'CONTAINS',
        'path' => '',
        'size' => 60,
      ),
      'type' => 'entityreference_autocomplete',
      'weight' => -3,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Enter the IP addresses for this server. You may leave this blank and we will lookup the IPs based on the hostname.');
  t('IP Addresses');
  t('Select the users that should be allowed access to this server.');
  t('Server Users');

  return $field_instances;
}
