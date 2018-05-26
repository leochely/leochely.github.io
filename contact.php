<?php
	$name = $_POST['userName'];
	$email = $_POST['userEmail'];
	$message = $_POST['userMessage'];
	
	echo $name;
	
	mail("leo.chely@live.fr", "Nouveau message sur ma page perso par" + $name,$message + "/n" + $email); 
?>