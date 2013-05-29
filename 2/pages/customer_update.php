<?php 

include "components/headercms.php";

$id = $_GET['user_id'];

if(isset($_POST['go'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$admin = $_POST['admin'];
	
	$query = "UPDATE users SET username = '$username', password = '$password', email = '$email', name = '$name' WHERE user_id = '$id'";	
	
		$update = mysql_query($query);
		if($update){
				echo 'User Updated!';
		}
		
		$query = "UPDATE products SET username = '$username', password = '$password', email = '$email', name = '$name' WHERE user_id = '$id'";	
	
		$update = mysql_query($query);
	
		if($update){
				echo 'User Updated!';
		}
	
	}
	?>


<?php


/*

We have the id of the product we want to work with...

We have done so by using $_GET variable. When we load the update.php page, we have given the id through the URL

*/



// USing the ID, we can pull the data from the database.

$query = "SELECT * FROM users WHERE user_id = '$id'";

// mysql_error() built-in function letd us know if we have a syntax error in our query.
$select = mysql_query($query) or die(mysql_error());

//mysql_fetch_Array... use this function when dealing with multiple rows of data


$result = mysql_fetch_assoc($select);// will fetch just one row of data in an associative array


// storing all the relevant data in variables so we can display them in the form.
	$username = $result['username'];
	$password = $result['password'];
	$email = $result['email'];
	$name = $result['name'];
	$admin = $result['admin'];


?>
<form method="post" enctype="multipart/form-data">

    <label>ID</label>
    <input type="text" name="user_id" value="<?php echo $id; ?>" /><br /><br />
    
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $username; ?>" /><br /><br />
    
	<label>Password</label>
    <input type="text" name="password" value="<?php echo $password; ?>" /><br /><br />
       
    <label>Email</label>
    <input type="text" name="email" value="<?php echo $email; ?>" /><br /><br />
    
     <label>Name</label>
    <textarea name="name"><?php echo $name; ?></textarea><br /><br /> 
    
    <label>Admin</label>
	<input type="text" name="admin" value="<?php echo $admin; ?>" /><br /><br />
    
	<input type="submit" name="go" value="Go" />
    
</form>
