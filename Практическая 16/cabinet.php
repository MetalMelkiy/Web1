<?php
    header( 'Content-Type: text/html; charset=utf-8' );
    // определяем начальные данные
    $dbHost = 'localhost';
    $dbName = 'prakt';
    $dbUsername = 'root';

    // соединяемся с сервером базы данных
$mysqli = mysqli_connect($dbHost, $dbUsername, '', $dbName);
if (mysqli_connect_errno($mysqli)) {
    die('Ошибка соединения: ' . mysqli_connect_error());
}
mysqli_set_charset ( $mysqli , 'utf8' );
 $zapr=mysqli_query($mysqli,"SELECT * FROM variant3 where id_reg=\"".$_SESSION['id_reg']."\"");
    $mailin=mysqli_fetch_array($zapr);

mysqli_set_charset ( $mysqli , 'utf8' );
//функция получения данных пользователя из базы
mysqli_close($mysqli);
 ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<title>Личный кабинет</title>
</head>
<body>
<form action="change.php" method="post">
<h2>Информация о пользователе</h2>
<label>Имя пользователя:<br> <?php echo $mailin[1]?></label><br>
<label>Фамилия пользователя:<br> <?php echo $mailin[2]?></label><br>
<label>Отчество пользователя:<br> <?php echo $mailin[3]?></label><br>
<label>Почта пользователя:<br> <?php echo $mailin[4]?></label><br>
<label>Учебное заведение:<br> <?php echo $mailin[7]?></label><br>
<label>Курс:<br> <?php echo $mailin[8]?></label><br>
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