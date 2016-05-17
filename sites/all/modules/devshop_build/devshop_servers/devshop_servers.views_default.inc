<?php
/**
 * @file
 * devshop_servers.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function devshop_servers_views_default_views() {
  $export = array();

  $view = new view();
  $view->name = 'devshop_servers';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Servers';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Servers';
  $handler->display->display_options['use_more_always'] = FALSE;
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'table';
  /* Header: CSS */
  $handler->display->display_options['header']['area']['id'] = 'area';
  $handler->display->display_options['header']['area']['table'] = 'views';
  $handler->display->display_options['header']['area']['field'] = 'area';
  $handler->display->display_options['header']['area']['ui_name'] = 'CSS';
  $handler->display->display_options['header']['area']['empty'] = TRUE;
  $handler->display->display_options['header']['area']['content'] = '<style>
/** HACK IT IN! **/
.btn-server-dashboard {
    width: 18em;
    text-overflow: ellipsis;
    overflow: hidden;
}

.btn-server-dashboard i.fa {
  margin-left: -.5em;
  margin-right: .5em;
}
.btn-group-server .btn {
    max-height: 4em;
}
</style>

<a href="/node/add/server"><i class="glyphicon glyphicon-plus"></i> Add Server</a>';
  $handler->display->display_options['header']['area']['format'] = 'unfiltered';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = TRUE;
  $handler->display->display_options['empty']['area']['content'] = 'No organization servers.';
  $handler->display->display_options['empty']['area']['format'] = 'filtered_html';
  /* Relationship: Entity Reference: Referenced Entity */
  $handler->display->display_options['relationships']['devshop_organization_target_id']['id'] = 'devshop_organization_target_id';
  $handler->display->display_options['relationships']['devshop_organization_target_id']['table'] = 'og_membership';
  $handler->display->display_options['relationships']['devshop_organization_target_id']['field'] = 'devshop_organization_target_id';
  $handler->display->display_options['relationships']['devshop_organization_target_id']['label'] = 'Organization';
  /* Field: Content: Logo */
  $handler->display->display_options['fields']['field_logo']['id'] = 'field_logo';
  $handler->display->display_options['fields']['field_logo']['table'] = 'field_data_field_logo';
  $handler->display->display_options['fields']['field_logo']['field'] = 'field_logo';
  $handler->display->display_options['fields']['field_logo']['relationship'] = 'devshop_organization_target_id';
  $handler->display->display_options['fields']['field_logo']['label'] = '';
  $handler->display->display_options['fields']['field_logo']['exclude'] = TRUE;
  $handler->display->display_options['fields']['field_logo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_logo']['empty'] = '<i class="fa fa-users fa-2x"></i>';
  $handler->display->display_options['fields']['field_logo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_logo']['settings'] = array(
    'image_style' => 'icon',
    'image_link' => '',
  );
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = 'Server Name';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['text'] = '<i class="fa fa-cube"></i> [title]';
  $handler->display->display_options['fields']['title']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['path'] = 'node/[nid]';
  $handler->display->display_options['fields']['title']['alter']['alt'] = 'Visit Server Dashboard for [title]';
  $handler->display->display_options['fields']['title']['alter']['link_class'] = 'btn btn-info btn-server-dashboard';
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
  /* Field: Content: Organization */
  $handler->display->display_options['fields']['devshop_organization']['id'] = 'devshop_organization';
  $handler->display->display_options['fields']['devshop_organization']['table'] = 'og_membership';
  $handler->display->display_options['fields']['devshop_organization']['field'] = 'devshop_organization';
  $handler->display->display_options['fields']['devshop_organization']['label'] = '';
  $handler->display->display_options['fields']['devshop_organization']['exclude'] = TRUE;
  $handler->display->display_options['fields']['devshop_organization']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['devshop_organization']['alter']['text'] = '[field_logo]';
  $handler->display->display_options['fields']['devshop_organization']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['devshop_organization']['alter']['path'] = 'node/[devshop_organization-target_id]';
  $handler->display->display_options['fields']['devshop_organization']['alter']['alt'] = 'Visit [devshop_organization] dashboard.';
  $handler->display->display_options['fields']['devshop_organization']['alter']['link_class'] = 'btn btn-default btn-small';
  $handler->display->display_options['fields']['devshop_organization']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['devshop_organization']['settings'] = array(
    'link' => 0,
  );
  $handler->display->display_options['fields']['devshop_organization']['delta_offset'] = '0';
  /* Field: Global: Custom text */
  $handler->display->display_options['fields']['nothing']['id'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['table'] = 'views';
  $handler->display->display_options['fields']['nothing']['field'] = 'nothing';
  $handler->display->display_options['fields']['nothing']['label'] = '';
  $handler->display->display_options['fields']['nothing']['alter']['text'] = '<div class="btn-group btn-group-server" role="group" aria-label="Server Dashboard and Organization">
  <div class="btn-group" role="group">
    [title]
  </div>
  <div class="btn-group" role="group">
    [devshop_organization]
  </div>
 </div>';
  $handler->display->display_options['fields']['nothing']['element_label_colon'] = FALSE;
  /* Field: Content: Edit link */
  $handler->display->display_options['fields']['edit_node']['id'] = 'edit_node';
  $handler->display->display_options['fields']['edit_node']['table'] = 'views_entity_node';
  $handler->display->display_options['fields']['edit_node']['field'] = 'edit_node';
  $handler->display->display_options['fields']['edit_node']['label'] = '';
  $handler->display->display_options['fields']['edit_node']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['edit_node']['alter']['text'] = '<i class="fa fa-gear"></i> Settings';
  $handler->display->display_options['fields']['edit_node']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['edit_node']['text'] = 'Settings';
  /* Field: Content: URL */
  $handler->display->display_options['fields']['field_url']['id'] = 'field_url';
  $handler->display->display_options['fields']['field_url']['table'] = 'field_data_field_url';
  $handler->display->display_options['fields']['field_url']['field'] = 'field_url';
  $handler->display->display_options['fields']['field_url']['label'] = '';
  $handler->display->display_options['fields']['field_url']['alter']['alter_text'] = TRUE;
  $handler->display->display_options['fields']['field_url']['alter']['text'] = '<img src="https://raw.githubusercontent.com/opendevshop/devshop/0.x/logo.png" width="32" height="32"> Launch DevShop';
  $handler->display->display_options['fields']['field_url']['alter']['make_link'] = TRUE;
  $handler->display->display_options['fields']['field_url']['alter']['path'] = '[field_url-url]';
  $handler->display->display_options['fields']['field_url']['alter']['external'] = TRUE;
  $handler->display->display_options['fields']['field_url']['alter']['link_class'] = 'btn btn-primary btn-small';
  $handler->display->display_options['fields']['field_url']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_url']['click_sort_column'] = 'url';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
  $handler->display->display_options['sorts']['created']['order'] = 'DESC';
  /* Contextual filter: Content: Organization (devshop_organization) */
  $handler->display->display_options['arguments']['devshop_organization_target_id']['id'] = 'devshop_organization_target_id';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['table'] = 'og_membership';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['field'] = 'devshop_organization_target_id';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['summary']['format'] = 'default_summary';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 1;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'server' => 'server',
  );
  /* Filter criterion: Hosting Server: Status */
  $handler->display->display_options['filters']['status_1']['id'] = 'status_1';
  $handler->display->display_options['filters']['status_1']['table'] = 'hosting_server';
  $handler->display->display_options['filters']['status_1']['field'] = 'status';
  $handler->display->display_options['filters']['status_1']['operator'] = '!=';
  $handler->display->display_options['filters']['status_1']['value']['value'] = '-2';

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'page');
  $handler->display->display_options['path'] = 'servers';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Servers';
  $handler->display->display_options['menu']['weight'] = '0';
  $handler->display->display_options['menu']['name'] = 'main-menu';
  $handler->display->display_options['menu']['context'] = 0;
  $handler->display->display_options['menu']['context_only_inline'] = 0;

  /* Display: Content pane */
  $handler = $view->new_display('panel_pane', 'Content pane', 'panel_pane_1');
  $handler->display->display_options['defaults']['arguments'] = FALSE;
  /* Contextual filter: Content: Organization (devshop_organization) */
  $handler->display->display_options['arguments']['devshop_organization_target_id']['id'] = 'devshop_organization_target_id';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['table'] = 'og_membership';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['field'] = 'devshop_organization_target_id';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['default_argument_type'] = 'fixed';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['summary']['number_of_records'] = '0';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['summary']['format'] = 'default_summary';
  $handler->display->display_options['arguments']['devshop_organization_target_id']['summary_options']['items_per_page'] = '25';
  $handler->display->display_options['argument_input'] = array(
    'devshop_organization_target_id' => array(
      'type' => 'context',
      'context' => 'entity:node.nid',
      'context_optional' => 0,
      'panel' => '0',
      'fixed' => '',
      'label' => 'Content: Organization (devshop_organization)',
    ),
  );
  $export['devshop_servers'] = $view;

  return $export;
}
