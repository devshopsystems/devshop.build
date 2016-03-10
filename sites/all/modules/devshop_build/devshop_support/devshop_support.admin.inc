<?php
/**
 * @file
 * Admin page callbacks for devshop_support module.
 */

/**
 * Intercom.io Webhooks setup.
 */
function devshop_support_intercom_webhooks_setup_form() {
  $form = array();

  $form['note'] = array(
    '#markup' => t('Setup Intercom.io webhooks to receive data directly from intercom.'),
  );

  return system_settings_form($form);

}