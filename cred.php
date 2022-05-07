<?php
	if(isset($_POST["got"])){
		$chem1 = $_POST['chem'];
		$user1 = $_COOKIE['user'];
		$id = $_COOKIE['id'];
		
		
	$mysql = new mysqli('localhost','root','root','register-bd');
	
	
	$mysql->query("UPDATE `users` SET `chem`='$chem1' WHERE `id`='$id'");
	
	setcookie('chem1', $chem1,time()+3600, "/");
	}
	header('Location: /prof.php');
?>