<?php
/*
  $Id$ProjectShopping
*/

  class cfgm_payment {
    var $code = 'payment';
    var $directory;
    var $language_directory = DIR_FS_CATALOG_LANGUAGES;
    var $key = 'MODULE_PAYMENT_INSTALLED';
    var $title;
    var $template_integration = false;

    function cfgm_payment() {
      $this->directory = DIR_FS_CATALOG_MODULES . 'payment/';
      $this->title = MODULE_CFG_MODULE_PAYMENT_TITLE;
    }
  }
?>
