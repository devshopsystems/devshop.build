<?php
/**
 * @file
 * devshop_people.pages_default.inc
 */

/**
 * Implements hook_default_page_manager_handlers().
 */
function devshop_people_default_page_manager_handlers() {
  $export = array();

  $handler = new stdClass();
  $handler->disabled = FALSE; /* Edit this to true to make a default handler disabled initially */
  $handler->api_version = 1;
  $handler->name = 'user_view__panel_context_23643cfc-8075-47c1-b928-760ff2ba56b5';
  $handler->task = 'user_view';
  $handler->subtask = '';
  $handler->handler = 'panel_context';
  $handler->weight = 0;
  $handler->conf = array(
    'title' => 'User Homepage',
    'no_blocks' => 0,
    'pipeline' => 'standard',
    'body_classes_to_remove' => '',
    'body_classes_to_add' => '',
    'css_id' => '',
    'css' => '',
    'contexts' => array(),
    'relationships' => array(),
    'name' => '',
    'access' => array(
      'logic' => 'and',
      'plugins' => array(),
    ),
  );
  $display = new panels_display();
  $display->layout = 'twocol';
  $display->layout_settings = array();
  $display->panel_settings = array(
    'style_settings' => array(
      'default' => NULL,
      'left' => NULL,
      'right' => NULL,
    ),
  );
  $display->cache = array();
  $display->title = '';
  $display->uuid = '9bd293a1-5908-49ca-b98a-a6f3e8f0ab14';
  $display->content = array();
  $display->panels = array();
    $pane = new stdClass();
    $pane->pid = 'new-68238425-1dc7-4056-b1fa-a7b616e8d65a';
    $pane->panel = 'left';
    $pane->type = 'user_picture';
    $pane->subtype = 'user_picture';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'context' => 'argument_entity_id:user_1',
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
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '68238425-1dc7-4056-b1fa-a7b616e8d65a';
    $display->content['new-68238425-1dc7-4056-b1fa-a7b616e8d65a'] = $pane;
    $display->panels['left'][0] = 'new-68238425-1dc7-4056-b1fa-a7b616e8d65a';
    $pane = new stdClass();
    $pane->pid = 'new-0d5613e6-a1ae-48e3-9dd9-0747eee78ed9';
    $pane->panel = 'left';
    $pane->type = 'entity_field';
    $pane->subtype = 'user:field_user_organizations';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'label' => 'title',
      'formatter' => 'entityreference_label',
      'delta_limit' => '0',
      'delta_offset' => '0',
      'delta_reversed' => 0,
      'formatter_settings' => array(
        'link' => 1,
      ),
      'context' => 'argument_entity_id:user_1',
      'override_title' => 1,
      'override_title_text' => 'Organizations',
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
    $pane->uuid = '0d5613e6-a1ae-48e3-9dd9-0747eee78ed9';
    $display->content['new-0d5613e6-a1ae-48e3-9dd9-0747eee78ed9'] = $pane;
    $display->panels['left'][1] = 'new-0d5613e6-a1ae-48e3-9dd9-0747eee78ed9';
    $pane = new stdClass();
    $pane->pid = 'new-74548813-2f65-46f7-bbf6-7d2cd675bca8';
    $pane->panel = 'left';
    $pane->type = 'entity_field_extra';
    $pane->subtype = 'user:summary';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'view_mode' => 'full',
      'context' => 'argument_entity_id:user_1',
      'override_title' => 0,
      'override_title_text' => '',
      'override_title_heading' => 'h2',
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 2;
    $pane->locks = array();
    $pane->uuid = '74548813-2f65-46f7-bbf6-7d2cd675bca8';
    $display->content['new-74548813-2f65-46f7-bbf6-7d2cd675bca8'] = $pane;
    $display->panels['left'][2] = 'new-74548813-2f65-46f7-bbf6-7d2cd675bca8';
    $pane = new stdClass();
    $pane->pid = 'new-6ea9f1f7-416a-4e78-a901-49471d8d437a';
    $pane->panel = 'right';
    $pane->type = 'custom';
    $pane->subtype = 'custom';
    $pane->shown = TRUE;
    $pane->access = array();
    $pane->configuration = array(
      'admin_title' => 'DevShop.Build welcome',
      'title' => '',
      'body' => 'Welcome to http://DevShop.Build!

We are in Private Alpha right now, so thank you so much for joining us in using this new product.

If you need to get in touch, just hit the little Chat bubble button at the bottom right of the page.

Stay tuned!
The OpenDevShop Team',
      'format' => 'filtered_html',
      'substitute' => 1,
    );
    $pane->cache = array();
    $pane->style = array(
      'settings' => NULL,
    );
    $pane->css = array();
    $pane->extras = array();
    $pane->position = 0;
    $pane->locks = array();
    $pane->uuid = '6ea9f1f7-416a-4e78-a901-49471d8d437a';
    $display->content['new-6ea9f1f7-416a-4e78-a901-49471d8d437a'] = $pane;
    $display->panels['right'][0] = 'new-6ea9f1f7-416a-4e78-a901-49471d8d437a';
  $display->hide_title = PANELS_TITLE_FIXED;
  $display->title_pane = 'new-68238425-1dc7-4056-b1fa-a7b616e8d65a';
  $handler->conf['display'] = $display;
  $export['user_view__panel_context_23643cfc-8075-47c1-b928-760ff2ba56b5'] = $handler;

  return $export;
}
