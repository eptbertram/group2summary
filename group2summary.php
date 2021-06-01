<?php

require_once 'group2summary.civix.php';

function group2summary_civicrm_summary( $contactID, &$content) {
  CRM_Core_Resources::singleton()
    ->addScriptFile('civicrm', 'packages/backbone/underscore.js', 110, 'html-header', FALSE);

  CRM_Core_Region::instance('page-body')->add(array(
    'template' => 'group2summary.tpl'
  ));
}

/* default behaviour */

/**
 * Implementation of hook_civicrm_config
 */
function group2summary_civicrm_config(&$config) {
  _group2summary_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function group2summary_civicrm_xmlMenu(&$files) {
  _group2summary_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function group2summary_civicrm_install() {
  _group2summary_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_postInstall
 */
function group2summary_civicrm_postInstall() {
  _group2summary_civix_civicrm_postInstall();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function group2summary_civicrm_uninstall() {
  _group2summary_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function group2summary_civicrm_enable() {
  _group2summary_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function group2summary_civicrm_disable() {
  _group2summary_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function group2summary_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _group2summary_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function group2summary_civicrm_managed(&$entities) {
  _group2summary_civix_civicrm_managed($entities);
}
