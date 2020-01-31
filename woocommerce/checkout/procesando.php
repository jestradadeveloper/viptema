<?php
$openpay = Openpay::getInstance('misxss21cb4mbghhe1wc', 
  'sk_72186c6a7b02459fa93a9250b200dc19');
global $woocommerce;
 $amount2 =  $woocommerce->cart->get_cart_total();

$customer = array(
     'name' => $_POST["billing_first_name"],
     'last_name' => $_POST["billing_last_name"],
     'phone_number' => $_POST["billing_phone"],
     'email' => $_POST["billing_email"],);

$chargeData = array(
    'method' => 'card',
    'source_id' => $_POST["token_id"],
    'amount' => $amount2,
    'description' => $_POST["description"],
    'device_session_id' => $_POST["device_session_id"],
    'customer' => $_POST[$customer]
    );

$charge = $openpay->charges->create($chargeData);
?>