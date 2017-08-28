<?php 

error_reporting(0);

include 'functions.php';

$customer_id = $_GET['customerId'];

if (isset($customer_id) && !empty($customer_id)) {
	$get_details 	= new Users();
	$data 		= $get_details->user_profile($customer_id);
	echo $data;
	die(0);
}

?> 

<!DOCTYPE html>
<html>
<head>
	<title>Stupid API</title>
</head>
<body>

<center>
<h1>Stupid API.</h1>
		<br>
<h3>
Keep Calm & enumerate.<br><a href="?customerId=1">Vulnerable Point
            </a><br><br>
</h3>


</body>
</html>

