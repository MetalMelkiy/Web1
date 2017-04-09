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
global $login;
if(isset($_POST['login'])){$GLOBALS['login']=$_POST['login'];}
mysqli_set_charset ( $mysqli , 'utf8' );
//функция получения данных пользователя из базы
function change($mysqli){
    session_start();
    $zapr=mysqli_query($mysqli,"SELECT * FROM variant3 WHERE login=\"".$GLOBALS['login']."\"");
    $mailin=mysqli_fetch_array($zapr);
    $error="";
    if($_POST['name'] &&!mb_ereg_match("[A-Za-zА-Яа-яЁё0-9]{2,13}",$_POST['name'])){$error.="Приняты неверные данные имени<br/>";}
    if($_POST['fam'] && !mb_ereg_match("[A-Za-zА-Яа-яЁё]{2,16}",$_POST['fam'])){$error.="Приняты неверные данные фамилии<br/>";}
    if($_POST['tname'] && !mb_ereg_match("[А-Яа-яA-Za-zЁё]{4,16}",$_POST['tname'])) {$error.="Приняты неверные данные отчества<br/>";}
    if($_POST['password'] &&! mb_ereg_match ("(?=.*\d{1})(?=.*[A-Z]{2,})(?=.*\W{3}).{6,20}",$_POST['password'])) {$error.="Приняты неверные данные пароля<br/>";}
    if($_POST['email'] &&!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){$error.="приняты неверные данные почты<br/>";}
    if($error!=NULL){echo $error;include('cabinet.php');die;}
    
    if(empty($_POST['name'])==FALSE && $_POST['name']<>$mailin[1] ){
  mysqli_query($mysqli,"UPDATE variant3 set name=\"".$_POST['name']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['fam'])==FALSE && $_POST['fam']<>$mailin[2] ) {
    mysqli_query($mysqli,"UPDATE variant3 set fam=\"".$_POST['fam']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['tname'])==FALSE && $_POST['tname']<>$mailin[3] ) {
    mysqli_query($mysqli,"UPDATE variant3 set tname=\"".$_POST['tname']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['password'])==FALSE && $_POST['password']<>$mailin[6] ) {
    mysqli_query($mysqli,"UPDATE variant3 set password=\"".$_POST['password']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['email'])==FALSE && $_POST['email']<>$mailin[4] ) {
    mysqli_query($mysqli,"UPDATE variant3 set email=\"".$_POST['email']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['zaved'])==FALSE && $_POST['zaved']<>$mailin[7] ) {
    mysqli_query($mysqli,"UPDATE variant3 set zaved=\"".$_POST['zaved']."\" where login=\"".$GLOBALS['login']."\"");
  }
  if(empty($_POST['kurs'])==FALSE && $_POST['kurs']<>$mailin[8]) {
    mysqli_query($mysqli,"UPDATE variant3 set kurs=\"".$_POST['kurs']."\" where login=\"".$GLOBALS['login']."\"");
  }
}
change($mysqli);
mysqli_close($mysqli);
include('cabinet.php');
?>