<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$firstname 		= $_POST['firstname'];
	$lastname 		= $_POST['lastname'];
	
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= $_POST['password'];

	$sql = "INSERT INTO registration (firstname, lastname,email, phonenumber, password ) VALUES(?,?,?,?,?)";
	$stmtinsert = $db->prepare($sql);
	$result = $stmtinsert->execute([$firstname, $lastname, $email, $phonenumber, $password]);
    
	if($result){
		header("Location: index.html");
	}else{
		echo 'There were erros while saving the data.';
	}
}else{
	echo 'No data';
}