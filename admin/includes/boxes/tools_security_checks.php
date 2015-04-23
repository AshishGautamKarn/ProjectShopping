<?php
/*
  $Id$

  ProjectShopping*/

  foreach ( $cl_box_groups as &$group ) {
    if ( $group['heading'] == BOX_HEADING_TOOLS ) {
      $group['apps'][] = array('code' => 'security_checks.php',
                               'title' => MODULES_ADMIN_MENU_TOOLS_SECURITY_CHECKS,
                               'link' => tep_href_link('security_checks.php'));

      break;
    }
  }
?>
