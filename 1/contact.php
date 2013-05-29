<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!-- Every form should have a defined method

and every element in the form should have an attribute called 'name' to differentiate them when handling the form data.

-->

<form method="post">
	
    <label>Name: </label>
	<input type="text" name="name" /><br/><br/>

	<label>Email: </label>
    <input type="text" name="email" /><br/><br/>
    
    <label>Subject: </label>
    <input type="text" name="subject" /><br/><br/>
    
    <label>Message: </label>
    <textarea name="message" cols="20" rows="10"></textarea><br/><br/>
    
    <input type="submit" value="Send" name="send" />
        
</form>

<?php 

//echo $_POST['name'] 

//if send button has been clicked... which also means the send POST variable has been created
if(isset($_POST['send'])) {
	//grab all data from the form and handle accordingly	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

	$headers = 'MIME-Version 1.0' . "\r\n";
	$headers .= 'Content-Type: text/html; charset=iso-8859-1' . '\r\n';
	
	$msg = <<<MESSAGEEMAIL
	
	name: $name
	email: $email
	
	message: $message

MESSAGEEMAIL;

	
	$to = "harrietpulford@gmail.com";
	
	// || means 'or' and && is 'and'
	// if name OR email OR message is empty display an error message
	
	if($name == '' || $email == '' || $message == ''){
		echo "Please fill out all required fields";	
	}	else {
		$mail = mail($to, $subject, $msg, $headers);
	}
	if($mail) {
		echo "Your message has been sent. We will reply as soon as possible.";	
	} 
	else {
		echo "Sorry, there was an error. Please contact the web developer if the problem persists.";	
	}
}



?>


</body>
</html>