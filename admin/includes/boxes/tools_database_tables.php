<?php
/*
  $Id$

  ProjectShopping`*/

  foreach ( $cl_box_groups as &$group ) {
    if ( $group['heading'] == BOX_HEADING_TOOLS ) {
      $group['apps'][] = array('code' => 'database_tables.php',
                               'title' => MODULES_ADMIN_MENU_TOOLS_DATABASE_TABLES,
                               'link' => tep_href_link('database_tables.php'));

      break;
    }
  }
?>
