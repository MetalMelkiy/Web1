<?php     
header( 'Content-Type: text/html; charset=utf-8' );
    // определяем начальные данные
    $dbHost = 'localhost';
    $dbName = 'prakt16';
    $dbUsername = 'root';

    // соединяемся с сервером базы данных
$mysqli = mysqli_connect($dbHost, $dbUsername, '', $dbName);
if (mysqli_connect_errno($mysqli)) {
    echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}
mysqli_set_charset ( $mysqli , 'utf8' );
//функция получения данных пользователя из базы
function change($mysqli){
	$zapr=mysqli_query($mysqli,"SELECT * FROM variant3 WHERE login=\"".$_COOKIE['login']."\"");
    $mailin=mysqli_fetch_array($zapr);
  if(empty($_POST['name'])==FALSE && $_POST['name']<>$mailin[1] ){
	mysqli_query($mysqli,"UPDATE variant3 set name=\"".$_POST['name']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
	setcookie("name", $_POST['name'], time() + 3600*24);
}
  if(empty($_POST['fam'])==FALSE && $_POST['fam']<>$mailin[2] ) {
  	mysqli_query($mysqli,"UPDATE variant3 set fam=\"".$_POST['fam']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  	setcookie("fam", $_POST['fam'], time() + 3600*24);
  }
  if(empty($_POST['tname'])==FALSE && $_POST['tname']<>$mailin[3] ) {
  	mysqli_query($mysqli,"UPDATE variant3 set tname=\"".$_POST['tname']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  	setcookie("tname", $_POST['tname'], time() + 3600*24);
  }
  if(empty($_POST['password'])==FALSE && $_POST['password']<>$mailin[6] ) {
  	mysqli_query($mysqli,"UPDATE variant3 set password=\"".$_POST['password']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  }
  if(empty($_POST['email'])==FALSE && $_POST['email']<>$mailin[4] ) {
  	mysqli_query($mysqli,"UPDATE variant3 set email=\"".$_POST['email']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  	setcookie("email", $_POST['email'], time() + 3600*24);
  }
  if(empty($_POST['zaved'])==FALSE && $_POST['zaved']<>$mailin[7] ) {
  	mysqli_query($mysqli,"UPDATE variant3 set zaved=\"".$_POST['zaved']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  	setcookie("zaved", $_POST['zaved'], time() + 3600*24);
  }
  if(empty($_POST['kurs'])==FALSE && $_POST['kurs']<>$mailin[8]) {
  	mysqli_query($mysqli,"UPDATE variant3 set kurs=\"".$_POST['kurs']."\" where id_reg=\"".$_COOKIE['id_reg']."\"");
  	setcookie("kurs", $_POST['kurs'], time() + 3600*24);
  }
}
change($mysqli);
mysqli_close($mysqli);
include('auth.html');
?>