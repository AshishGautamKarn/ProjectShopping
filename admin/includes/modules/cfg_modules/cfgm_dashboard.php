<?php
/*
  $Id$

 ProjectShopping
*/

  class cfgm_dashboard {
    var $code = 'dashboard';
    var $directory;
    var $language_directory;
    var $key = 'MODULE_ADMIN_DASHBOARD_INSTALLED';
    var $title;
    var $template_integration = false;

    function cfgm_dashboard() {
      $this->directory = DIR_FS_ADMIN . 'includes/modules/dashboard/';
      $this->language_directory = DIR_FS_ADMIN . 'includes/languages/';
      $this->title = MODULE_CFG_MODULE_DASHBOARD_TITLE;
    }
  }
?>
