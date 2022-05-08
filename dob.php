<?php
	if(isset($_POST["dobavit"])){
		$idp = $_COOKIE['id'];
		$name = $_COOKIE['user'];
		$naz = $_POST['namem'];
		$ot = $_POST['ot'];
		$do = $_POST['do'];
		$tip = $_POST['tip'];
		$op = $_POST['op'];
		$nyz = $_POST['nyz'];
		$kont = $_POST['kont'];
		
		$mysql = new mysqli('localhost','root','root','register-bd');
		$mysql->query("INSERT INTO `add`(`name`,`idp`, `naz`,`ot`,`do`,`tip`,`op`,`nyz`,`kont`)	VALUES('$name','$idp', '$naz','$ot','$do','$tip','$op','$nyz','$kont')");
	
	setcookie('namep', $name,time()+3600, "/");
	setcookie('naz', $naz,time()+3600, "/");
	setcookie('ot', $ot,time()+3600, "/");
	setcookie('do', $do,time()+3600, "/");
	setcookie('tip', $tip,time()+3600, "/");
	setcookie('op', $op,time()+3600, "/");
	setcookie('nyz', $nyz,time()+3600, "/");
	setcookie('kont', $kont,time()+3600, "/");
	}
	header('Location: /prof.php');
?>