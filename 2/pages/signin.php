<?php


?>


<h1>Sign In</h1>

<form method="post">
	<label>Username</label>
    <input type="text" name="username" /><br /><br />

    <label>Password</label>
	<input type="password" name="password" /><br /><br />
   
	<input type="submit" name="signin" value="Sign In" />
    
</form>

<?php

// If the sign in button has been clicked,
if(isset($_POST['signin'])){
	//store all the data from the form in variables
	
	$username = $_POST['username'];
	
	$password = md5($_POST['password']); //md5() encrypts the data into mixed characters. 


 	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

	//mysql_query is a built in function in PHP that allows us to run a query in the database. (any query - select/update/insert etc)
	$sql_query = mysql_query($query);
	
	//mysql_num_rows counts the number of rows in the dataset
	$number_of_rows = mysql_num_rows($sql_query);
	
	$admin = mysql_fetch_assoc($sql_query);

	//if user is admin, take them to the back end
	if($number_of_rows > 0 && $admin['admin']==1) {

		echo "<a href='pages/view_product.php'>CMS</a>";
		
		// Global variable called Session stores data for us...
		$_SESSION['logged_in'] = TRUE;
		
		//The user needs to be stored in a session variable so that we can use it in the basket page.
		$_SESSION['user_id'] = $admin['user_id'];
		
	}
	else if($number_of_rows > 0 && $admin['admin']==0) {		
		// header redirects the user
		header("location:index.php?page=home");
		$_SESSION['logged_in'] = TRUE;
	}
	else {
		$_SESSION['logged_in'] = FALSE;
		echo "Are you trying to hack into NASA system?";			
	}
}
?>