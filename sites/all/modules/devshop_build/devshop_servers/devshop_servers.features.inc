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
    'server' => array(
      'name' => t('Server'),
      'base' => 'node_content',
      'description' => t('A system capable of running services.'),
      'has_title' => '1',
      'title_label' => t('Host Name'),
      'help' => t('A server is a system capable of running services.  DevShop will connect to each server to provision services.'),
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
