<?php
/*
  $Id$

  ProjectShopping*/

  $cl_box_groups[] = array(
    'heading' => BOX_HEADING_REPORTS,
    'apps' => array(
      array(
        'code' => FILENAME_STATS_PRODUCTS_VIEWED,
        'title' => BOX_REPORTS_PRODUCTS_VIEWED,
        'link' => tep_href_link(FILENAME_STATS_PRODUCTS_VIEWED)
      ),
      array(
        'code' => FILENAME_STATS_PRODUCTS_PURCHASED,
        'title' => BOX_REPORTS_PRODUCTS_PURCHASED,
        'link' => tep_href_link(FILENAME_STATS_PRODUCTS_PURCHASED)
      ),
      array(
        'code' => FILENAME_STATS_CUSTOMERS,
        'title' => BOX_REPORTS_ORDERS_TOTAL,
        'link' => tep_href_link(FILENAME_STATS_CUSTOMERS)
      )
    )
  );
?>
