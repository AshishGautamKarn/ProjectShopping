<?php
/*
  $Id$

ProjectShopping

*/

  class cfgm_order_total {
    var $code = 'order_total';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_ORDER_TOTAL_INSTALLED';
    var $title;
    var $template_integration = false;

    function cfgm_order_total() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'order_total/';
      $this->title = MODULE_CFG_MODULE_ORDER_TOTAL_TITLE;
    }
  }
?>
