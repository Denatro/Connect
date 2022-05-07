<?php
	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$a = filter_var(trim($_POST['a']),
	FILTER_SANITIZE_STRING);
	// $chem = filter_var(trim($_POST['chem']),
	// FILTER_SANITIZE_STRING);
	
	if (mb_strlen($name) < 5 || mb_strlen($name) > 90){
		$error = "Недопустимая длина название организации";
	}
	if(mb_strlen($pass)<2 || mb_strlen($pass)>20){
		echo "Недопустимая длина пароля от 2 до 20";
		exit();
	}
	
	$pass = md5($pass."dqldjfehwo1275");
	$mysql = new mysqli('localhost','root','root','register-bd');
	$mysql->query("INSERT INTO `users`(`name`, `pass`,`email`,`a`)	VALUES('$name', '$pass', '$email','$a')");
	
	$mysql->close();
	
	header('Location: /index.php');
?>