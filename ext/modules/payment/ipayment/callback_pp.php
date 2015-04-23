<?php
/*
  $Id$ProjectShopping
*/

  chdir('../../../../');
  require('includes/application_top.php');

  require(DIR_WS_LANGUAGES . $language . '/modules/payment/ipayment_pp.php');
  require('includes/modules/payment/ipayment_pp.php');
  $ipayment_pp = new ipayment_pp();

  if (!$ipayment_pp->check() || !$ipayment_pp->enabled) {
    exit;
  }

  if (in_array(tep_get_ip_address(), $ipayment_pp->gateway_addresses)) {
    $checksum_pass = 0; // unknown

    if (tep_not_null(MODULE_PAYMENT_IPAYMENT_PP_SECRET_HASH_PASSWORD)) {
// verify ret_param_checksum
      if ($HTTP_POST_VARS['ret_param_checksum'] == md5(MODULE_PAYMENT_IPAYMENT_PP_USER_ID . $HTTP_POST_VARS['trx_amount'] . $HTTP_POST_VARS['trx_currency'] . $HTTP_POST_VARS['ret_authcode'] . $HTTP_POST_VARS['ret_booknr'] . MODULE_PAYMENT_IPAYMENT_PP_SECRET_HASH_PASSWORD)) {
        $checksum_pass = 1; // true
      } else {
        $checksum_pass = -1; // false
      }
    }

    $ipayment_pp->sendDebugEmail($checksum_pass);
  }
?>
