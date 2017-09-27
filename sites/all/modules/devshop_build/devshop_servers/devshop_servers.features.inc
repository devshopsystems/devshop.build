<?php
/**
 * @file
 * devshop_servers.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function devshop_servers_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function devshop_servers_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function devshop_servers_node_info() {
  $items = array(
    'server_type' => array(
      'name' => t('Server Type'),
      'base' => 'node_content',
      'description' => t('A specific type of server offered by devshop.build'),
      'has_title' => '1',
      'title_label' => t('Type Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
