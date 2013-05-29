<?php

/* 

This file handles the connection to the database

*/

//mysql_connect('hostname', 'username', 'password')
$connection = mysql_connect('localhost', 'root', '');

if(!$connection){
	echo "Connection could not be made. Please check your details...";
}

//selecting the database to work with
$database = mysql_select_db("14-feb-2012");

if(!$database){
	echo "Could not find database. Please check your details...";
	
}

echo "HeEY";


?>