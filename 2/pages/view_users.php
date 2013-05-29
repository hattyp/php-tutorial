<?php

include "components/headercms.php";

$query = "SELECT * FROM users";

//mysql_query is a built in function in PHP that allows us to run a query in the database

$result = mysql_query($query);

//fetch a row of data
while($row = mysql_fetch_array($result))
{
	$user_id = $row['user_id'];
	$username = $row['username'];
	$password = $row['password'];
	$email = $row['email'];
	$name = $row['name'];
	
	$data .= "<tr>
		<td>$user_id</td>
		<td>$username</td>
		<td>$password</td>
		<td>$email</td>
		<td>$name</td>
		</tr>";
		
}

?>

<table border="2">
	<tr>
    	<td>ID</td>
        <td>Username</td>
        <td>Password</td>
        <td>Email</td>
        <td>Name</td>
    </tr>
    
    <?php echo $data; ?>
</table>