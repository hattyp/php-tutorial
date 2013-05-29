<?php 

include "components/headercms.php";

$id = $_GET['user_id'];

$query = "DELETE FROM users WHERE user_id = $id";

		$update = mysql_query($query);
		if($update){
				echo 'User Deleted!';
		}
		

?>

<script type="text/javascript">

		alert("NOW LOOK WHAT YOU'VE DONE!");

		window.location = 'http://localhost/13_Feb_PHP_Harriet/Day2/pages/view_customer.php';

</script>