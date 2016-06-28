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
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
