<form name="contact-from" id="payments" class="booking-form" action="https://www.payhere.lk/pay/checkout" method="post">                                          
    <center>
        <button type="submit" id="pay" class="btn btn-warning btn-block" style="width: 80%">Pay Now</button>
    </center> 

    <!--sandbox merchant id-->
    <input type="hidden" name="merchant_id" value="1213021">  

    <!--live merchant id-->

    <!--                                            <input type="hidden" name="merchant_id" value="213543">  -->
    <input type="hidden" name="return_url" value="http://ecollege.lk/">
    <input type="hidden" name="cancel_url" value="http://ecollege.lk/">
    <input type="hidden"  name="amount" value="1000">
    <input type="hidden" name="notify_url" value="http://ecollege.lk/payments/notify.php">
    <input name="order_id" id="order_id" type="hidden" value="6" />
    <input type="hidden" name="currency" value="LKR">
</form>