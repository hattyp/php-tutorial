<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form method="post">

<label>Email</label>
<input type="text" name="email" /><br />

<label>Password</label>
<input type="password" name="password" /><br />


<input type="submit" name="send" value="Log In" />

</form>

<?php

if(isset($_POST['send'])){
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	echo "<br/>Your details are: <br/>" . "Email:" . $email . "<br/>" . "Password: " . $password;
	
}


?>

</body>
</html>