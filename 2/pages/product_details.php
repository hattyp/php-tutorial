<?php 


$id = $_GET['p_id'];

$query = "SELECT * FROM products WHERE productid = '$id'";

$select = mysql_query($query);

$row = mysql_fetch_array($select);

	$product_id = $row['productid'];
	$name = $row['name'];
	$price = $row['price'];
	$category = $row['category'];
	$file_name = $row['image'];


	
?>	

<table width="500" border="3" cellspacing="0" cellpadding="5" width="700" style="margin: 0 auto;">
  <tr>
    <td><?php echo $product_id; ?></td>
    <td><?php echo $name; ?></td>
    <td>&pound;<?php echo $price; ?></td>
    <td><?php echo $category; ?></td>
    <td><img src="assets/products/<?php echo $file_name;?>" /></td>
    
    <a href="index.php?page=basket&p_id=<?php echo $id; ?>"><img src="assets/addtobasket.jpg" alt="Add to basket" /></a>
    
  </tr>
</table>