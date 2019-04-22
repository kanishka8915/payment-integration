<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal :: SPACE-O </title>
</head>
<body>

	<?php
		//fetch products from the database
		$results = $db->query("SELECT * FROM products");
		while($row = $results->fetch_assoc())
		{
	?>
    <br/>Prodcut Name: <?php echo $row['name']; ?>
    <br/>Product Price: <?php echo $row['price']; ?>

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="get" target="_top">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="amayamathur97a@gmail.com">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="hosted_button_id" value="AJKSFGXM9P6X6">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="CAD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='http://localhost/paypal/paypal/paypal_cancel.php'>
		<input type='hidden' name='return' value='http://localhost/paypal/paypal/paypal_success.php'>
        
        
        <!-- Display the payment button. -->


        <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">

    </form>



    

        <?php }?>
</body>
</html>
