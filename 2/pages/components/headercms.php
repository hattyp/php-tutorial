<?php

include "../settings/DB_settings.php";

?>

<style type="text/css">
#topNav {
	font-size:14px; text-align:center; width:98%; height:35px; color:#fff; margin:5px 25px 0px 50px; float:right; font:"Trebuchet MS", Verdana, Arial; background-color:#900;
}
#topNav ul {
	margin:0;
	padding:0;
	 
}
#topNav li {
	list-style:none;
	padding:0px;
	margin:0px 0px 0px 0px;
	float:left;
	
}
#topNav a {
	text-align:center;
	text-decoration: none;
	padding:0px 12px 0px 12px; line-height:35px; display:block; margin:0px; height:35px; float:left; color:#fff; font-weight:normal;
	background-color:#900;
}
#topNav a:hover {
	background-color:#F9F;
}
#topNav a#current {
	background:url(../images/mouse_over.jpg) repeat-x;
}

.msg{
	color:#FFF;
	background-color:#990;
	font-size:14px;
	border:1px dashed #F00
}


.odd{	
	background-color:#9F6;
}

.even{	
	background-color:#9F0;
}

#top
{
	text-align:right;	
}

</style>

<div id="top">
<?php 
	$user_name = $_SESSION['user_name'];
	echo "Welcome $user_name" ;
	
	/*
		another way of writing
		echo "Welcome " . $_SESSION['user_name'] ;
		
	*/
	
?>
</div>

<div id="topNav">
<ul>
  <li><a href="view_product.php">View Products</a></li>
  <li><a href="add_product.php">Add Product</a></li>
  <li><a href="view_customer.php">View Customers</a></li>
  <li><a href="add_customer.php">Add Customer</a></li>
  <li><a href="view_category.php">View Categories</a></li>
  <li><a href="add_category.php">Add Category</a></li>
  <li><a href="view_order.php">View Orders</a></li>
  <li><a href="add_page.php">Add a page</a></li>
</ul>
</div>