
<html>
	<head>
		<title>Connect</title>
		<script src="script/script.js" defer></script>
		<script src="script/scripte.js" defer></script>
		<link rel="stylesheet" href = "style/style.css">
		<link rel="stylesheet" href = "style/reg.css">
		<link rel="stylesheet" href = "style/news.css">
		<link rel="shortcut icon" href="kart\ikon.png" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
	</head>
	<body>
		<form action="dop.php" method="post"></form>
		<form action="auth.php" method="post"></form>
		<div id="panel">
				<button id="logo"><img src="kart\logo.png" width="100%" height="85%"></button>
				<form action="prof.php">
					<button id="prof"></button>
				</form>
		</div>
		<div id="lenta">
			<div id="poloska">
				<div id="s1"><div id="txte"><b>На нашем сайте появился календарь<br><div id="sda" style="margin-left:100px; font-size:35px;">Успейте им воспользоваться</div></div><img src="kart\cal.png" width="100%" height="100%"></div>
				<div id="s2"><div id="txte"><b>IT школа Гигабайт<br><div id="sda" style="margin-left:100px; font-size:35px;">Открывает набор учеников</div></div><img src="kart\sh.png" width="100%" height="100%"></div>
				<div id="s3"><div id="txte"><b>Специалисты!<br><div id="sda" style="margin-left:100px; font-size:35px;">Найдите работу на нашем сайте</div></div><img src="kart\sp.png" width="100%" height="100%"></div>
			</div>
			<div id="nazad"></div>
			<div id="vpered"></div>
		</div>
		<div id="panel2"></div>
		<div id="glavp">
			<div id="news">Новости
				<div id="new">
					<div id="namep"><?=$_COOKIE['namep']?></div>
					<div id="naz"><?=$_COOKIE['naz']?></div>
					<div id="ot"><?=$_COOKIE['ot']?></div>
					<div id="do"><?=$_COOKIE['do']?></div>
					<div id="tip"><?=$_COOKIE['tip']?></div>
					<div id="op"><?=$_COOKIE['op']?></div>
					<div id="nyz"><?=$_COOKIE['nyz']?></div>
					<div id="kont"><?=$_COOKIE['kont']?></div>
				</div>
			</div>
			<div id="calendar"></div>
		</div>
		<div id="contact"></div>
		<div id="verh"></div>
	</body>
</html>