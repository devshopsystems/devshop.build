<?php
/**
 * @file
 * devshop_organizations.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function devshop_organizations_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'node_view__organization-pae';
  $handler->task = 'node_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 1;
  $handler->conf = array(
    'title' => 'Organization Page',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => 'organization-pae',
    'access' => array(
      'plugins' => array(
        0 => array(
          'name' => 'node_type',
          'settings' => array(
            'type' => array(
              'organization' => 'organization',
            ),
          ),
          'context' => 'argument_entity_id:node_1',
          'not' => FALSE,
        ),
        1 => array(
          'name' => 'node_access',
          'settings' => array(
            'type' => 'view',
          ),
          'context' => array(
            0 => 'logged-in-user',
            1 => 'argument_entity_id:node_1',
          ),
          'not' => FALSE,
        ),
      ),
      'logic' => 'and',
    ),
  );
  $display = new panels_display();
  $display->layout = 'twocol_stacked';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'top' => NULL,
      'left' => NULL,
      'right' => NULL,
      'bottom' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '526803a5-1db9-4bac-a026-141f5ea5dd28';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-5188f2df-fd37-4b19-b6a4-563d088260bf';
    $pane->panel = 'bottom';
    $pane->type = 'views_panes';
    $pane->subtype = 'devshop_servers-panel_pane_1';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'context' => array(
        0 => 'argument_entity_id:node_1',
      ),
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '5188f2df-fd37-4b19-b6a4-563d088260bf';
    $display->content['new-5188f2df-fd37-4b19-b6a4-563d088260bf'] = $pane;
    $display->panels['bottom'][0] = 'new-5188f2df-fd37-4b19-b6a4-563d088260bf';
    $pane = new stdClass();
    $pane->pid = 'new-594a8389-89f6-49b0-bdec-bc5697a08705';
    $pane->panel = 'top';
    $pane->type = 'entity_field';
    $pane->subtype = 'node:field_logo';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'hidden',
      'formatter' => 'image',
      'delta_limit' => 0,
      'delta_offset' => '0',
      'delta_reversed' => FALSE,
      'formatter_settings' => array(
        'image_style' => 'thumbnail',
        'image_link' => 'content',
      ),
      'context' => 'argument_entity_id:node_1',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array(
      'css_id' => '',
      'css_class' => 'pull-left well',
    );
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '594a8389-89f6-49b0-bdec-bc5697a08705';
    $display->content['new-594a8389-89f6-49b0-bdec-bc5697a08705'] = $pane;
    $display->panels['top'][0] = 'new-594a8389-89f6-49b0-bdec-bc5697a08705';
    $pane = new stdClass();
    $pane->pid = 'new-71681751-22a8-4c41-93ea-76de14090eec';
    $pane->panel = 'top';
    $pane->type = 'views';
    $pane->subtype = 'devshop_organization_members';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'override_pager_settings' => 0,
      'use_pager' => 0,
      'nodes_per_page' => '5',
      'pager_id' => '0',
      'offset' => '0',
      'more_link' => 0,
      'feed_icons' => 0,
      'panel_args' => 1,
      'link_to_view' => 0,
      'args' => '',
      'url' => '',
      'display' => 'block_1',
      'context' => array(
        0 => '',
      ),
      'override_title' => 1,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 1;
    $pane->locks = array();
    $pane->uuid = '71681751-22a8-4c41-93ea-76de14090eec';
    $display->content['new-71681751-22a8-4c41-93ea-76de14090eec'] = $pane;
    $display->panels['top'][1] = 'new-71681751-22a8-4c41-93ea-76de14090eec';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = '0';
  $handler->conf['display'] = $display;
  $export['node_view__organization-pae'] = $handler;

  return $export;
}
