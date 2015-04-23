<?php
/*
  $Id$
ProjectShopping

*/

  class cfgm_action_recorder {
    var $code = 'action_recorder';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_ACTION_RECORDER_INSTALLED';
    var $title;
    var $template_integration = false;

    function cfgm_action_recorder() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'action_recorder/';
      $this->title = MODULE_CFG_MODULE_ACTION_RECORDER_TITLE;
    }
  }
?>
