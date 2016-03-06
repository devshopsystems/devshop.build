<?php
/**
 * @file
 * devshop_organizations.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function devshop_organizations_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function devshop_organizations_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function devshop_organizations_node_info() {
  $items = array(
    'organization' => array(
      'name' => t('Organization'),
      'base' => 'node_content',
      'description' => t('A group of users and machines and conversations.'),
      'has_title' => '1',
      'title_label' => t('Organization Name'),
      'help' => t('Create an organization to bring your team together on DevShop.Support. You must have an Organization to create a server.'),
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

/**
 * Implements hook_default_og_membership_type().
 */
function devshop_organizations_default_og_membership_type() {
  $items = array();
  $items['organization_administrator'] = entity_import('og_membership_type', '{
    "name" : "organization_administrator",
    "description" : "Organization Administrator",
    "language" : "",
    "rdf_mapping" : []
  }');
  $items['organization_member'] = entity_import('og_membership_type', '{
    "name" : "organization_member",
    "description" : "Organization Member",
    "language" : "",
    "rdf_mapping" : []
  }');
  return $items;
}
