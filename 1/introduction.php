<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<!-- This is our php tag -->
<?php

//echo is a keyword to display things on the page. It could be plain text or HTML
echo "hello world<br />";

$myName = "Harriet";
$googleLink = '<a href="http://www.google.com" target="_blank">Google</a>';

echo $myName;
echo $googleLink;

//the data type for whatever is inside the quotes is called String

/* 

An array is a group of elements

There are two types of arrays:

1. Numeric

2. Associative

*/

// This is an example of a numeric array
$myArray = array("array item 1", "array item 2", "this is number 3", "fourth one");

// print_r displays all the items inside an array
print_r($myArray);

//accessing the element inside the array by the number it has been assigned...
echo $myArray[1];

$fiveThings = array("cat","dog","fish","bird","reptile");

//Concatenation 

echo $fiveThings[2];

echo "my favourite animal is a " . $fiveThings[4];

// Associative array

echo "<h1>Associative Array</h1>";

//array("key"=>"value")
$myBook = array("name"=>"The girl with the dragon tattoo","author"=>"Eric Larson","published"=>"2010");

echo $myBook['name'];

echo "<br/>Name: ". $myBook[name] . "<br/>";
echo "Author: ". $myBook[author] . "<br/>";
echo "Published: ". $myBook[published] . "<br/>";


/* 

IF statement

if(condition) {
	Do something here	
}

*/

if($myName == "Harriet") {
	echo "<p>Hey, your name is Harriet!</p>";
} else {
	echo "<p>I don't know what your name is...</p>";	
}

$day = "Monday";

if($day == "Monday") {
	echo "Today is Monday";
}
else if($day == "Tuesday") {
	echo "Today is Tuesday";
}

$city = "London";

if($city == "London"){
	echo "The city is London";	
} 
else if ($city == "LA"){
	echo "The city is LA";	
}
else if($city == "New York"){
	echo "The city is New York";
}
else if($city == "Berlin") {
	echo "The city is Berlin";
}

/* A switch case allows us to compare one variable to many different values easily. 

	switch($variable){
		case "London" :	
		
		do something here...
		
		break;
		
		default:

	}

*/

switch($city){
	case "Berlin":
		//if the city is Berlin, it'll display this message.
		echo "Welcome to Berlin";

	break;
	
	case "Los Angeles":
		echo "Welcome to LA";
		
	break;
	
	
	//if the value does not match any of the cases it will be the default...
	default:
	
		echo "Welcome to " . $city;
}


/*

Loops

Two different types -

1. for loops
	Used when you know the amount of loops you have to execute.
	
	for($start; $condition; $dosomething){
		
	}

2. while loops

	while($condition){
		//do something
	}

*/

for($i = 0;$i<=20;$i++){
	echo "<p>" . "$i" . "</p>";
}

$number = 20;
while($number>=17){
	echo $number;
	$number--;
}

/* Global variables

$_GET - use this to transfer data through the URL. Used for less sensitive data.

$_GET[page] = "contact";

$_POST - can handle more data and is more secure than $_GET variables. It is used to handle sensitive data such as logging in information.


Function

A group of statements that is assigned a name to be called whenever you need them. 



*/


function calculate($price)
{
	//whatever is inside the curly brackets will be executed when the function is called
	
	echo "calculating...";
	
	$vat = $price * 0.2;
	echo $vat . "<br/>";

}

calculate(500);

function total($price)
{
	$vat = $price * 0.2;
	$total = $vat + $price;
	echo $total;
}

total(300)


echo date('l'); //Lowercase 'l' to display the current day


?>

</body>
</html>