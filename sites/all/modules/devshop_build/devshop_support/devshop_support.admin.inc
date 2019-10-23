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

//  $client = intercomio_get_client();

  new Guzzle
  $response = $client->get('https://api.intercom.io/subscriptions/')->getResponse()->getBody();


  dsm($response);

  return system_settings_form($form);

}