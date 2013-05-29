<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dotpeak Enterprises | PHP Project</title>

</head>

<body>

<ul>
	<!-- Within the URL, we're creating a global $_GET[] variable called page, and giving it values 
    
    We can use a function to determine what page to load depending on the value of $_GET['page'].
    
    -->
	<li><a href="index.php?page=home">Home</a></li>
	<li><a href="index.php?page=about">About</a></li>
   	<li><a href="index.php?page=contact">Contact</a></li>
   	<li><a href="index.php?page=signup">Sign Up</a></li>
    <li><a href="index.php?page=products">Products</a></li>

</ul>

<?php

include "settings/DB_settings.php";

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == FALSE){
	// the user is not logged in...
	
	//show the sign in form
	include "pages/signin.php";
	
} else {
	
	echo 'You are logged in... DATE:'.date('l') . '<br />';
	
}


?>