
<?php


?>
<h1>Sign Up</h1>

<form method="post">
    <label>Name</label>
    <input type="text" name="name" /><br /><br />
    
	<label>Username</label>
    <input type="text" name="username" /><br /><br />
       
    <label>Email</label>
    <input type="text" name="email" /><br /><br />
    
    <label>Password</label>
	<input type="password" name="password" /><br /><br />
       
	<input type="submit" name="signup" value="Sign Up" />
    
</form>

<?php


if(isset($_POST['signup'])){
	//store all the data from the form in variables
	
	$name = $_POST['name'];
		
	$username = $_POST['username'];
				
	$email = $_POST['email'];	
	
	$password = md5($_POST['password']); //md5() encrypts the data into mixed characters. 
}

$query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";



	//mysql_query is a built in function in PHP that allows us to run a query in the database. (any query - select/update/insert etc)
	$insert = mysql_query($query);

	if($insert){
		echo "Registration successful!";
		}
		else {
		echo "Please enter your data";	
		}

?>