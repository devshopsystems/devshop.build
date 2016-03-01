<?php

/**
 * An implementation of the solr service type, registered with hook_hosting_service.
 */
class hostingService_solr_jetty extends hostingService_solr_public {
  /**
   * the value stored in the type column of the hosting_service table.
   */
  public $type = 'jetty';

  function default_port() {
    return 8983;
  }
  /**
   * this service needs to be restarted with a shell command.
   */
  protected $has_restart_cmd = TRUE;

  function default_restart_cmd() {
    $command = '/etc/init.d/solr';
    return "sudo $command restart";
  }
}


