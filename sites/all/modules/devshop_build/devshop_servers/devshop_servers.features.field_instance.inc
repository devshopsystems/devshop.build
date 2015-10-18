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

  // Exported field_instance: 'node-server-devshop_server_ip_address'.
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
      'weight' => 1,
    ),
  );

  // Exported field_instance: 'node-server-devshop_server_users'.
  $field_instances['node-server-devshop_server_users'] = array(
    'bundle' => 'server',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Select the users that should be allowed access to this server.',
    'display' => array(
      'default' => array(
        'label' => 'inline',
        'module' => 'entityreference',
        'settings' => array(
          'link' => 1,
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
    'label' => 'Users',
    'required' => 0,
    'settings' => array(
      'nodeaccess_userreference' => array(
        'all' => array(
          'view' => 0,
        ),
        'all_published' => 0,
        'author' => array(
          'delete' => 0,
          'update' => 0,
          'view' => 0,
        ),
        'author_published' => 0,
        'create' => array(
          'article' => 0,
          'page' => 0,
          'server' => 0,
        ),
        'priority' => 0,
        'referenced' => array(
          'delete' => 0,
          'deny_delete' => 0,
          'deny_update' => 0,
          'deny_view' => 0,
          'update' => 0,
          'view' => 'view',
        ),
        'referenced_published' => 0,
        'unused' => 1,
        'views' => array(
          'view' => '',
          'view_args' => '',
        ),
      ),
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
      'weight' => 3,
    ),
  );

  // Exported field_instance: 'node-server-devshop_server_users_admins'.
  $field_instances['node-server-devshop_server_users_admins'] = array(
    'bundle' => 'server',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => 'Add the users who get full linux user accounts on this server.

<strong>WARNING:</strong> These users will have SUDO access WITHOUT a password. Use with caution.',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'entityreference',
        'settings' => array(
          'link' => FALSE,
        ),
        'type' => 'entityreference_label',
        'weight' => 3,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'devshop_server_users_admins',
    'label' => 'System Administrators',
    'required' => 0,
    'settings' => array(
      'nodeaccess_userreference' => array(
        'all' => array(
          'view' => 0,
        ),
        'all_published' => 0,
        'author' => array(
          'delete' => 0,
          'update' => 0,
          'view' => 0,
        ),
        'author_published' => 0,
        'create' => array(
          'server' => 0,
        ),
        'priority' => 0,
        'referenced' => array(
          'delete' => 0,
          'deny_delete' => 0,
          'deny_update' => 0,
          'deny_view' => 0,
          'update' => 0,
          'view' => 0,
        ),
        'referenced_published' => 0,
        'unused' => 0,
        'views' => array(
          'view' => '',
          'view_args' => '',
        ),
      ),
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
      'weight' => 4,
    ),
  );

  // Exported field_instance: 'node-server-field_url'.
  $field_instances['node-server-field_url'] = array(
    'bundle' => 'server',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'hidden',
        'module' => 'link',
        'settings' => array(),
        'type' => 'link_default',
        'weight' => 2,
      ),
      'teaser' => array(
        'label' => 'above',
        'settings' => array(),
        'type' => 'hidden',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'node',
    'field_name' => 'field_url',
    'label' => 'URL',
    'required' => 0,
    'settings' => array(
      'absolute_url' => 1,
      'attributes' => array(
        'class' => 'btn btn-default',
        'configurable_class' => 0,
        'configurable_title' => 0,
        'rel' => '',
        'target' => '_blank',
        'title' => 'Launch DevShop',
      ),
      'display' => array(
        'url_cutoff' => 80,
      ),
      'enable_tokens' => 1,
      'rel_remove' => 'default',
      'title' => 'optional',
      'title_label_use_field_label' => 0,
      'title_maxlength' => 128,
      'title_value' => '',
      'url' => 0,
      'user_register_form' => FALSE,
      'validate_url' => 1,
    ),
    'widget' => array(
      'active' => 0,
      'module' => 'link',
      'settings' => array(),
      'type' => 'link_field',
      'weight' => 2,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Add the users who get full linux user accounts on this server.

<strong>WARNING:</strong> These users will have SUDO access WITHOUT a password. Use with caution.');
  t('Enter the IP addresses for this server. You may leave this blank and we will lookup the IPs based on the hostname.');
  t('IP Addresses');
  t('Select the users that should be allowed access to this server.');
  t('System Administrators');
  t('URL');
  t('Users');

  return $field_instances;
}
