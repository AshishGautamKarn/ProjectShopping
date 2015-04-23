<?php
/*
  $Id$ProjectShopping

*/

  class cfgm_header_tags {
    var $code = 'header_tags';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_HEADER_TAGS_INSTALLED';
    var $title;
    var $template_integration = true;

    function cfgm_header_tags() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'header_tags/';
      $this->title = MODULE_CFG_MODULE_HEADER_TAGS_TITLE;
    }
  }
?>
