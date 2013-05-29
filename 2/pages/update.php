<?php 

include "components/headercms.php";

$id = $_GET['productid'];

if(isset($_POST['go'])){
	$name = $_POST['name'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$description = $_POST['description'];
	$image = $_FILES['image']['name'];	
	
	// if no image was being uploaded
	if($image == ''){
		$query = "UPDATE products SET name = '$name', price = '$price', category = '$category', description = '$description' WHERE productid = '$id'";	
	
		$update = mysql_query($query);
		if($update){
				echo 'Product Updated!';
		}
		}   else {
			$file_name = $_FILES['image']['name'];
			$file_location = "../assets/products/"; //where we are moving the file to
			$file_tmp = $_FILES['image']['tmp_name']; // the temporary location of this file is needed for move_uploaded_file to give it a new location
	
			$moveFile = move_uploaded_file($file_tmp, $file_location . $file_name);

		
		if(!$moveFile){
			echo "Could not upload image. Please contact the web developer.";	
		}
		
		$query = "UPDATE products SET name = '$name', price = '$price', category = '$category', description = '$description', image = '$file_name' WHERE productid = '$id'";	
	
		$update = mysql_query($query);
	
		if($update){
				echo 'Product Updated!';
		}
	
	}
	?>

	<script type="text/javascript">
    
		window.location = 'http://localhost/13_Feb_PHP_Harriet/Day2/pages/view_product.php';
    
    </script>
    
    <?php
	
}

?>






<?php


/*

We have the id of the product we want to work with...

We have done so by using $_GET variable. When we load the update.php page, we have given the id through the URL

*/



// USing the ID, we can pull the data from the database.

$query = "SELECT * FROM products WHERE productid = '$id'";

// mysql_error() built-in function letd us know if we have a syntax error in our query.
$select = mysql_query($query) or die(mysql_error());

//mysql_fetch_Array... use this function when dealing with multiple rows of data


$result = mysql_fetch_assoc($select);// will fetch just one row of data in an associative array


// storing all the relevant data in variables so we can display them in the form.
	$name = $result['name'];
	$price = $result['price'];
	$category = $result['category'];
	$description = $result['description'];
	$image = $result['image'];
	

?>
<form method="post" enctype="multipart/form-data">

    <label>ID</label>
    <input type="text" name="productid" value="<?php echo $id; ?>" /><br /><br />
    
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" /><br /><br />
    
	<label>Price</label>
    <input type="text" name="price" value="<?php echo $price; ?>" /><br /><br />
       
    <label>Category</label>
    <input type="text" name="category" value="<?php echo $category; ?>" /><br /><br />
    
     <label>Description</label>
    <textarea name="description"><?php echo $description; ?></textarea><br /><br /> 
 
    <label>Image</label>
    <input type="file" name="image" /><br /><br />
 	<img src="../assets/products/<?php echo $image; ?>" alt="Product Thumbnail" />
    
	<input type="submit" name="go" value="Go" />
    
</form>
