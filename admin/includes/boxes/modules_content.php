<?php
/*
  $Id$

  ProjectShopping*/

  foreach ( $cl_box_groups as &$group ) {
    if ( $group['heading'] == BOX_HEADING_MODULES ) {
      $group['apps'][] = array('code' => 'modules_content.php',
                               'title' => MODULES_ADMIN_MENU_MODULES_CONTENT,
                               'link' => tep_href_link('modules_content.php'));

      break;
    }
  }
?>
