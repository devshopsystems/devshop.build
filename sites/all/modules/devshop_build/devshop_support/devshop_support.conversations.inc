<?php
/**
 * @file
 * Admin page callbacks for devshop_support module.
 */

/**
 * Intercom.io Conversations import.
 */
function devshop_support_intercom_conversations_form() {
  $form = array();

  $form['note'] = array(
    '#markup' => t('Load conversations in as nodes.'),
  );

  $client = intercomio_get_client();
  $convos = $client->getConversations();

  $rows = array();

  while ($convos['pages']['next']) {

    $response = $client->get($convos['pages']['next']);
    dsm($response['conversations'], $convos['pages']['next']);

  }
  foreach ($convos['conversations'] as $conversation) {
    $row = array();
    $row[] = $conversation['id'];
    $row[] = kpr($conversation, 1);
    $rows[] = $row;
  }

  $form['note'] = array(
    '#markup' => theme('table', array(
      'rows' => $rows,
      'headers' => array('Data'),
    ))
  );

//  dsm((string)$convos, count($convos['conversations']));
  $form['submit'] = array(
    '#value' => t('Import'),
    '#type' => 'submit',
  );

  return $form;

}