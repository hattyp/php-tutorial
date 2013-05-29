<?php

include "components/headercms.php";

?>

<h1>Add page</h1>

<!-- When dealing with file uploads, the enctype attribute must be declared -->
<form method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="name" /><br /><br />
    
	<label>Contents</label>
    <input type="text" name="page_contents" /><br /><br />
  
	<input type="submit" name="go" value="Go" />
    
</form>

<?php


if(isset($_POST['go'])){
	//store all the data from the form in variables
	
	$name = $_POST['name'];
		
	$contents = $_POST['page_contents'];

	$url = strtolower($name);
	$url2 = str_replace(" ", "-", $url);
}


$query = "INSERT INTO pages (name, page_contents, url) VALUES ('$name', '$contents', '$url2')";

	//mysql_query is a built in function in PHP that allows us to run a query in the database. (any query - select/update/insert etc)
	$insert = mysql_query($query);

	if($insert){
		echo "Page added!";
		}
		else {
		echo "Please enter your data";	
		}

?>