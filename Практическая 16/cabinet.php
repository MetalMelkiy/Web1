<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<title>Личный кабинет</title>
</head>
<body>
<form action=change.php method="post">
<h2>Информация о пользователе</h2>
<label>Имя пользователя:<br> <?php echo $_COOKIE['name']?></label><br>
<label>Фамилия пользователя:<br> <?php echo $_COOKIE['fam']?></label><br>
<label>Отчество пользователя:<br> <?php echo $_COOKIE['tname']?></label><br>
<label>Почта пользователя:<br> <?php echo $_COOKIE['email']?></label><br>
<label>Учебное заведение:<br> <?php echo $_COOKIE['zaved']?></label><br>
<label>Курс:<br> <?php echo $_COOKIE['kurs']?></label><br>
<h2>Изменить данные</h2>
<input type="text" name="name" pattern="[A-Za-zА-Яа-яЁё0-9]{2,13}" placeholder="Имя"><br>
<input type="text" name="fam" pattern="[A-Za-zА-Яа-яЁё]{2,16}" placeholder="Фамилия"><br>
<input type="text" name="tname" pattern="[A-Za-zА-Яа-яЁё]{4,16}" placeholder="Отчество""><br>
<input type="password" name="password" pattern="(?=.*\d{1})(?=.*[A-Z]{2,})(?=.*\W{3}).{6,20}" placeholder="Пароль" autocomplete="off"><br>
<input type="email" name="email" placeholder="E-mail"><br>
<select name="zaved" selected="2">
<option>РКСИ</option>
<option>МГУ</option>
<option>MIT</option>
<option>ЮФУ</option>
<option>ДГТУ</option>
</select><br>
<label><input type="radio" name="kurs" value="1"> 1 курс</label><br>
<label><input type="radio" name="kurs" value="2"> 2 курс</label><br>
<label><input type="radio" name="kurs" value="3"> 3 курс</label><br>
<label><input type="radio" name="kurs" value="4"> 4 курс</label><br>
<label><input type="radio" name="kurs" value="5"> 5 курс</label><br>
<input class="ghost-button" type="submit" name="reg" value="ИЗМЕНИТЬ ДАННЫЕ">
</form>
</body>
</html>