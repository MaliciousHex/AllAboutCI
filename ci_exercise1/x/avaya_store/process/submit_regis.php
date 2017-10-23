<?php 

	include "../config/config.php";
    include "../classes/database.php";
	

	$customer_name 	= $_POST["customer_name"];

	$customer_email = $_POST["customer_email"];

	$phone_no 		= $_POST["phone_no"];

	$gender 	    = $_POST["gender"];

	$customer_address 	= $_POST["customer_address"];

	$post_code 	= $_POST["post_code"];

	$country 	= $_POST["country"];

	$province 	=$_POST["province"];

	$city 		= $_POST["city"];

	$username 	= $_POST["username"];

	$password 	= md5($_POST["password"]);

	$term		= $_POST['term'];
	
	
	
?>