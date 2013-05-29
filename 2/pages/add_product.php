<?php

include "components/headercms.php";

?>

<h1>Add product</h1>

<!-- When dealing with file uploads, the enctype attribute must be declared -->
<form method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="name" /><br /><br />
    
	<label>Price</label>
    <input type="text" name="price" /><br /><br />
       
    <label>Category</label>
    <input type="text" name="category" /><br /><br />
    
    <label>Description</label>
	<textarea name="description" cols="15" rows="5"></textarea><br /><br />
    
    <label>Image</label>
    <input type="file" name="image" /><br /><br />
    
	<input type="submit" name="go" value="Go" />
    
</form>

<?php


if(isset($_POST['go'])){
	//store all the data from the form in variables
	
	$name = $_POST['name'];
		
	$price = $_POST['price'];
				
	$category = $_POST['category'];	
	
	$description = $_POST['description'];
	
	//print_r($_FILES['image']);
}

//This is the result of the print_r()

//Array ( [name] => Penguins.jpg [type] => image/jpeg [tmp_name] => C:\wamp\tmp\php6C68.tmp [error] => 0 [size] => 777835 )

/*

$_FILES['image']['name'] is the name of the file that we uploaded

$_FILES['image']['type'] is the type of the file

$_FILES['image']['tmp_name'] is the temporary name that the server has assigned

S_FILES['image']['error'] is the error code - 0 means no problem

$_FILES['image']['size'] is the size of the file

*/

// != means 'is not equal to' - we are assigning a value here - we are comparing.
if($_FILES['image']['name'] != ''){	
	$file_name = $_FILES['image']['name'];
	$file_location = "../assets/products/"; //where we are moving the file to
	$file_tmp = $_FILES['image']['tmp_name']; // the temporary location of this file is needed for move_uploaded_file to give it a new location

	$moveFile = move_uploaded_file($file_tmp, $file_location . $file_name);
	
	if(!$moveFile){
		echo "Could not upload image. Please contact the web developer.";	
	}

}

$query = "INSERT INTO products (name, price, category, description, image) VALUES ('$name', '$price', '$category', '$description', '$file_name')";

	//mysql_query is a built in function in PHP that allows us to run a query in the database. (any query - select/update/insert etc)
	$insert = mysql_query($query);

	if($insert){
		echo "Product added!";
		}
		else {
		echo "Please enter your data";	
		}

?>