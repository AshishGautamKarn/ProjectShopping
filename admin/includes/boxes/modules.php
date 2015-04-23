<?php
/*
  $Id$

  ProjectShopping*/

  $cl_box_groups[] = array(
    'heading' => BOX_HEADING_MODULES,
    'apps' => array()
  );

  foreach ($cfgModules->getAll() as $m) {
    $cl_box_groups[sizeof($cl_box_groups)-1]['apps'][] = array('code' => FILENAME_MODULES,
                                                               'title' => $m['title'],
                                                               'link' => tep_href_link(FILENAME_MODULES, 'set=' . $m['code']));
  }
?>
