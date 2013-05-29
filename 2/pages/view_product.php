<?php


include "components/headercms.php";


$query = "SELECT * FROM products";

//mysql_query is a built in function in PHP that allows us to run a query in the database

$result = mysql_query($query);

//fetch a row of data
while($row = mysql_fetch_array($result))
{
	$product_id = $row['productid'];
	$name = $row['name'];
	$price = $row['price'];
	$category = $row['category'];
	$file_name = $row['image'];
	
	$data .= "<tr>
		<td>$product_id</td>
		<td>$name</td>
		<td>$price</td>
		<td>$category</td>
		<td><img src='../assets/products/$file_name' /></td>
		<td><a href='$product_update.php?user_id=$product_id'>Update</a></td>
		<td><a href='$product_delete.php?user_id=$$product_id'>Delete</a></td>
		</tr>";
		

}

?>



<table border="2" width="100%">
	<tr>
    	<td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Category</td>
        <td>Image</td>
        <td colspan="2">Options</td>
    </tr>
    
    <?php echo $data; ?>
</table>