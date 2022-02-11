<?php

include '../class/include.php';


$merchant_id = $_POST['merchant_id'];
$order_id = $_POST['order_id'];
$payhere_amount = $_POST['payhere_amount'];
$payhere_currency = $_POST['payhere_currency'];
$status_code = $_POST['status_code'];
$md5sig = $_POST['md5sig'];
$number_of_date = $_POST['number_of_date'];

//$merchant_secret = '121302112130211213021'; // Sandbox Merchant Secret
$merchant_secret = '36328ce7104ad17d4ef157ccc6c9e526'; // live

$local_md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));

if ($status_code == 2) {

    $PAYMENT = new Payment($order_id);

    $PAYMENT->paymentStatusCode = $status_code;
    $PAYMENT->status = 1;
    $PAYMENT->number_of_date = $number_of_date;
    $result = $PAYMENT->updatePaymentStatusCodeAndStatus();
}
?>