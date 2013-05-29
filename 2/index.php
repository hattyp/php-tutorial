<?php session_start();

//this inserts the specified page to this file
//we will be including the header and footer files and change the content dynamically
include "pages/components/header.php";

//Comparing the value of $_GET['page'] to include different pages. 

switch($_GET['page']){
		
		case 'home' :
		
		include "pages/home.php";
		
		break;
		
		case 'contact' :
		
		include "pages/contact.php";
		
		break;
		
		case 'about' :
		
		include "pages/about.php";
		
		break;
		
		case 'signup' :
		
		include "pages/signup.php";
		
		break;
		
		case 'signin':
		
		include "pages/signin.php";
		
		break;
		
		case 'products':
		
		include "pages/products.php";
		
		break;
		
		case 'product_details':
		
		include "pages/product_details.php";
		
		break;

		case 'basket':
		
		include "pages/basket.php";
		
		break;
	
}


include "pages/components/footer.php";
?>