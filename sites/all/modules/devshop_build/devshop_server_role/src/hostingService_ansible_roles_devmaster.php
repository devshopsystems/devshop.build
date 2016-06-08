<?php
/**
 * @file
 * Provide the hosting serivce classes for database integration.
 */

/**
 * Custom Ansible Roles service.
 */
class hostingService_ansible_roles_devmaster extends hostingService_ansible_roles {
  public $type = 'devmaster';
  public $name = 'DevShop DevMaster';

  function form(&$form) {
    parent::form($form);
    $form['note'] = array(
      '#markup' => t('Install a full DevShop DevMaster server.'),
    );
  }

  function load() {
    parent::load();

    $this->roles = $this->getRoles();

    $this->ansible_vars['mysql_root_password'] = variable_get("server_root_mysql_passwd_{$this->server->title}", user_password(64));
    $this->ansible_vars['devshop_cli_version'] = '1.0.0-beta3';
    $this->ansible_vars['devshop_version'] = '1.0.0-beta3';
    $this->ansible_vars['server_hostname'] = $this->server->title;
  }

  function insert() {
    parent::insert();

    // Save password for later retrieval
    $mysql_root_password_variable_name = "server_root_mysql_passwd_{$this->server->title}";
    variable_set($mysql_root_password_variable_name, user_password(64));

  }

  /**
   * The list of ansible roles that this service depends on.
   *
   * @return array
   */
  function getRoles() {
    return array(
      'opendevshop.devmaster'
    );
  }
}
