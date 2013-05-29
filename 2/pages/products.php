<?php

$query = "SELECT name, price, image, productid FROM products";

$select = mysql_query($query);

while($row = mysql_fetch_assoc($select))
{
	
	$image = $row['image'];
	$name = $row['name'];
	$price = number_format($row['price']); //formats the number to e.g. 30,000
	$id = $row['productid'];
	
	$data .= "
	
	<a href='index.php?page=product_details&p_id=$id'>
	
	<img src='assets/products/$image' width='150' alt='Product Image: $name' />
	<p>$name | &pound; $price</p>
	
	</a>
	
	";
}

echo $data;







?>