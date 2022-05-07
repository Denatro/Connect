<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=0.8, user-scalable=no">
		<title>Connect-личный кабинет</title>
		<script src="script/prof.js" defer></script>
		<link rel="stylesheet" href = "style/prof.css">
		<link rel="shortcut icon" href="kart\ikon.png" type="image/x-icon">
	</head>
	<body>
			<form action="check.php" method="post">
		</form>
		<form action="cred.php" method="post">
		</form>
		<form action="index.php">
			<div id="poloska">
				<button id="logo1"><img src="kart\logo.png" width="100%" height="85%"></button>
			</div>
		</form>
		<div id="poloska2"></div>
		<div id="poloska3"></div>
		<div style="text-align:center; font-size:40px; margin-top:350px;"><?=$_COOKIE['user']?></div><br>
		<div style="text-align:center; font-size:30px; margin-top:-25px;"><?=$_COOKIE['chem1']?></div>
		<div style="text-align:center; font-size:30px; margin-top:5px;">Создайте новое мероприятие</div>
		<form action="add.php">
			<button id="dobavit"></button>
		</form>
		<div id="logo"></div>
		<form action="red.html">
			<button id="red" class="btn btn-success"type="submit"></button>
		</form>
	</body>
</html>
