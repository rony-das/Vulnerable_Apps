<?php 


class Users
{
	
	public function user_profile($id)
	{
		// Edit the MySQL Credentials accordingly.
		$db     =    "defencely_lab";
		$host   =    "localhost";
		$user   =    "root";
		$pass   =    "root";   
		$cred   =    "mysql:host=$host;dbname=$db";

		$connect        = new PDO($cred, $user, $pass);
		$simple_query 	= "select email, phone, first_name, last_name from users where id= :id ;";
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	        $query 		  	= $connect->prepare($simple_query); 
 
    	$query->bindParam(':id', $id, PDO::PARAM_INT);
    	$query->execute();
    	$result = $query->setFetchMode(PDO::FETCH_ASSOC); 
    	
    	foreach($query->fetchAll() as $item => $tar) { 
        	
        	return json_encode($tar);
    	
    	}
	
	}
}

?> 
