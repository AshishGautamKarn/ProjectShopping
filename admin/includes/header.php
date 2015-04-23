<?php
/*
  $Id$

  ProjectShopping

*/

  if ($messageStack->size > 0) {
    echo $messageStack->output();
  }
?>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2"><?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . tep_image(DIR_WS_IMAGES . 'ProjectShopping
.png', 'ProjectShopping
 Online Merchant v' . tep_get_version()) . '</a>'; ?></td>
  </tr>
  <tr class="headerBar">
    <td class="headerBarContent">&nbsp;&nbsp;<?php echo '<a href="' . tep_href_link(FILENAME_DEFAULT) . '" class="headerLink">' . HEADER_TITLE_ADMINISTRATION . '</a> &nbsp;|&nbsp; <a href="' . tep_catalog_href_link() . '" class="headerLink">' . HEADER_TITLE_ONLINE_CATALOG . '</a> &nbsp;|&nbsp; <a href="http://www.ProjectShopping
.com" class="headerLink">' . HEADER_TITLE_SUPPORT_SITE . '</a>'; ?></td>
    <td class="headerBarContent" align="right"><?php echo (tep_session_is_registered('admin') ? 'Logged in as: ' . $admin['username']  . ' (<a href="' . tep_href_link(FILENAME_LOGIN, 'action=logoff') . '" class="headerLink">Logoff</a>)' : ''); ?>&nbsp;&nbsp;</td>
  </tr>
</table>