<?php
/*
  $Id$

 ProjectShopping*/

  require(DIR_WS_INCLUDES . 'counter.php');
?>

<div class="grid_24 footer">
  <p align="center"><?php echo FOOTER_TEXT_BODY; ?></p>
</div>

<?php
  if ($banner = tep_banner_exists('dynamic', 'footer')) {
?>

<div class="grid_24" style="text-align: center; padding-bottom: 20px;">
  <?php echo tep_display_banner('static', $banner); ?>
</div>

<?php
  }
?>

<script type="text/javascript">
$('.productListTable tr:nth-child(even)').addClass('alt');
</script>
