<?php 

include "components/headercms.php";

$id = $_GET['productid'];

$query = "DELETE FROM products WHERE productid = $id";

		$update = mysql_query($query);
		if($update){
				echo 'Product Deleted!';
		}
		

?>

<script type="text/javascript">

		alert("NOW LOOK WHAT YOU'VE DONE!");

		window.location = 'http://localhost/13_Feb_PHP_Harriet/Day2/pages/view_product.php';

</script>