<?php
/*
  $Id$ProjectShopping

*/

  class securityCheck_file_uploads {
    var $type = 'warning';

    function securityCheck_file_uploads() {
      global $language;

      include(DIR_FS_ADMIN . 'includes/languages/' . $language . '/modules/security_check/file_uploads.php');
    }

    function pass() {
      return (bool)ini_get('file_uploads');
    }

    function getMessage() {
      return WARNING_FILE_UPLOADS_DISABLED;
    }
  }
?>
