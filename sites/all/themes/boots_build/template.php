<?php

/**
 * Implements hook_preprocess_page()
 * @param $vars
 */
function boots_build_preprocess_node(&$vars){

  // I don't know why, but server nodes are missing their titles!
  if (isset($vars['node']->nid) && empty($vars['node']->title)) {
    $vars['node'] = node_load($vars['node']->nid);
  }
}

/**
 * Implements hook_preprocess_page()
 * @param $vars
 */
function boots_build_preprocess_page(&$vars){

  if (!empty($vars['tabs']) && $vars['node']->type != 'project') {
    $vars['content_column_class'] = ' class="col-sm-9"';
  }

  // Render stuff
  $vars['tabs_rendered'] = render($vars['tabs']);
  $vars['sidebar_first_rendered'] = render($vars['page']['sidebar_first']);
}

/**
 * Returns HTML for primary and secondary local tasks.
 *
 * @param array $variables
 *   An associative array containing:
 *     - primary: (optional) An array of local tasks (tabs).
 *     - secondary: (optional) An array of local tasks (tabs).
 *
 * @return string
 *   The constructed HTML.
 *
 * @see theme_menu_local_tasks()
 * @see menu_local_tasks()
 *
 * @ingroup theme_functions
 */
function boots_build_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs--primary nav nav-pills nav-stacked">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }

  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs--secondary pagination pagination-sm">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

