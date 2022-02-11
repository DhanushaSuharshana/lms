<?php

include '../../class/include.php';


$merchant_id = $_POST['merchant_id'];
$order_id = $_POST['order_id'];
$payhere_amount = $_POST['payhere_amount'];
$payhere_currency = $_POST['payhere_currency'];
$status_code = $_POST['status_code'];
$md5sig = $_POST['md5sig'];

$merchant_secret = '121302112130211213021'; // Sandbox Merchant Secret

$local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));

if (($local_md5sig === $md5sig) AND ( $status_code == 2)) {

    $PAYMENT = new Payment($order_id);

    $PAYMENT->paymentStatusCode = $status_code;
    $PAYMENT->status = 1;
    $result = $PAYMENT->updatePaymentStatusCodeAndStatus();
}
?>