<?php

// The product ID was passed to the basket via the product details page
$p_id = $_GET['p_id'];

// The user ID was stored in the SESSION variable
$user_id = $_SESSION['user_id'];


//add product to order
$result = mysql_query("INSERT INTO orders(userid, productid, quantity) VALUES('$user_id', '$p_id', '1')");

// Equijoin used to join both tables together over their common fields
$result_basket = mysql_query("SELECT * FROM orders, products WHERE orders.productid = products.productid");

while($row = mysql_fetch_array($result_basket))
{
	
	// fetching data and saving them as variables
	$order_id = $row['orderid'];	
	$user_id = $row['userid'];
	$product_id = $row['productid'];
	$quantity = $row['quantity'];
	$name = $row['name'];
	$price = $row['price'];
	$total_price = $price + $total_price;


	//storing all data in one variable
	$data .= "<tr>
		<td>$quantity</td>
		<td>$name</td>
		<td>&pound;$price</td>
	</tr>";	
}

echo "<table border=1 width=70% padding=5>$data;</table>
<strong>Total price:</strong> &pound;$total_price";


?>
     
     <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
     <input type="hidden" name="cmd" value="_xclick"> 
                    <input type="hidden" name="upload" value="1"> 
                    <input type="hidden" name="amount" value="<?php echo $total_price; ?>"> 
                    <input type="hidden" name="business" value="sebastian_410@yahoo.com">
                    <input type="hidden" name="item_number" value="">
                    <input type="hidden" name="currency_code" value="GBP">                    
                    <input type="submit" value="Pay Now">
</form>