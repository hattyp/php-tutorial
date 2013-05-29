<?php


include "components/headercms.php";


$query = "SELECT * FROM pages";

//mysql_query is a built in function in PHP that allows us to run a query in the database

$result = mysql_query($query);

//fetch a row of data
while($row = mysql_fetch_array($result))
{
	$page_id = $row['page_id'];
	$page_contents = $row['page_contents'];
	
	$data .= "<tr>
		<td>$page_id</td>
		<td>$page_contents</td>
		</tr>";
		
}

?>



<table border="2" width="100%">
	<tr>
    	<td>Page ID</td>
        <td>Page Contents</td>
        <td colspan="2">Options</td>
    </tr>
    
    <?php echo $data; ?>
</table>