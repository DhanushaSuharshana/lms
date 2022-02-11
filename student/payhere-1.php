<html>
    <body>
        <form method="post" class="demo-form-wrapper card " action="https://www.payhere.lk/pay/checkout" style="padding: 50px" id="form-data">  

            <input type="hidden" name="merchant_id" value="215525">  

            <input type="hidden" name="return_url" value="http://ecollege.lk/student/payment-success.php">
            <input type="hidden" name="cancel_url" value="http://ecollege.lk/student/payment-cancel.php">
            <input type="hidden" name="notify_url" value="http://ecollege.lk/student/notify.php">
            <br><br>Item Details<br>
            <input type="text" name="order_id" value="ItemNo12345">
            <input type="text" name="items" value="Door bell wireless"><br>
            <input type="text" name="currency" value="LKR">
            <input type="text" name="amount" value="1000">  
            <br><br>Customer Details<br>
            <input type="text" name="first_name" value="Saman">
            <input type="text" name="last_name" value="Perera"><br>
            <input type="text" name="email" value="samanp@gmail.com">
            <input type="text" name="phone" value="0771234567"><br>
            <input type="text" name="address" value="No.1, Galle Road">
            <input type="text" name="city" value="Colombo">
            <input type="hidden" name="country" value="Sri Lanka"> 
            <input type="submit" value="Buy Now">   
        </form> 
        <script src="js/jquery.min.js" type="text/javascript"></script> 
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/jm.spinner.js" type="text/javascript"></script>

        <script src="ajax/js/payment.js" type="text/javascript"></script>
    </body>
</html>