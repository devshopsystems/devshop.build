<?php

/**
 * The base service type class , registered with hook_hosting_service_type.
 */
class hostingService_solr extends hostingService {
 /**
  * the value stored in the service column of hosting_service table.
  */
  public $service = 'solr';
}

/**
 * Public instance of hostingService_solr
 */
class hostingService_solr_public extends hostingService_solr {
  protected $has_port = TRUE;

  function update() {
    parent::update();
  }
  
  public function context_options($task_type, $ref_type, &$task) {
    parent::context_options($task_type, $ref_type, $task);
  }
}

/**
 * An implementation of the solr service type, registered with hook_hosting_service.
 */
class hostingService_solr_tomcat extends hostingService_solr_public {
 /**
  * the value stored in the type column of the hosting_service table.
  */
  public $type = 'tomcat';

  function default_port() {
    return 8080;
  }

 /**
  * this service needs to be restarted with a shell command.
  */
  protected $has_restart_cmd = TRUE;

  function default_restart_cmd() {
    $command = '/etc/init.d/tomcat7'; // A proper default for most of the world
    return "sudo $command restart";
  }

  function form(&$form) {
    parent::form($form);
    $server = node_load($this->server->nid);

    $form['solr_war_path'] = array(
      '#type' => 'textfield',
      '#title' => t('Path to solr.war'),
      '#description' => t('Enter the absolute path to the solr.war file you would like to use. This file can be located in any folder on the system.'),
      '#default_value' => $server->solr_war_path,
    );
  }
}
