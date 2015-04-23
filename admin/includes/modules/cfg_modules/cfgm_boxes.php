<?php
/*
  $Id$

 ProjectShopping
*/

  class cfgm_boxes {
    var $code = 'boxes';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_BOXES_INSTALLED';
    var $title;
    var $template_integration = true;

    function cfgm_boxes() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'boxes/';
      $this->title = MODULE_CFG_MODULE_BOXES_TITLE;
    }
  }
?>
