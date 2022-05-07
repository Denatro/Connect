<html>
	<head>
		<title>Connect-Добавить Мероприятие</title>
		<script src="script/add.js" defer></script>
		<link rel="stylesheet" href = "style/add.css">
		<link rel="shortcut icon" href="kart\ikon.png" type="image/x-icon">
	</head>
	<body>
		<form action="check.php" method="post">
		</form>
		<form action="dob.php" method="post">
			<input type="text" class="form-control" name="namem" id="namem" placeholder="Название мероприятия">
			<div style="margin-left:250px; font-size:40px; margin-top:120px;">Продолжительность мероприятия</div>
			<input type="date" name="ot" id="calendar">
			<div style="margin-left:1000px; font-size:40px; margin-top:-40px;">===></div>
			<input type="date"name="do" id="calendar2">
			<select id="vsb" >
				<option selected="selected" name="tip">Выберите тип мероприятия</option>
				<option>1тип</option>
				<option>2тип</option>
				<option>3тип</option>
				<option>4тип</option>
			</select>
			<input type="text" class="form-control" name="op" id="ob"maxlength="200" placeholder="">
			<input type="text" class="form-control" name="nyz" id="cho" placeholder="Что необходимо?">
			<input type="text" class="form-control" name="kont" id="cont" placeholder="Контакт организации">
			<button id="dobavit"  class="btn btn-success"type="submit" name="dobavit">Добавить</button>
		</form>
	</body>
</html>