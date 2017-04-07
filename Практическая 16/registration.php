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
//функция проверки входящих данных POST
function buryat($mysqli){
  $error="";
  if(!mb_ereg_match("[A-Za-zА-Яа-яЁё0-9]{2,13}",$_POST['name'])){$error.="Приняты неверные данные имени<br/>";}
  if(!mb_ereg_match("[A-Za-zА-Яа-яЁё]{2,16}",$_POST['fam'])){$error.="Приняты неверные данные фамилии<br/>";}
  if(!mb_ereg_match("[А-Яа-яA-Za-zЁё]{4,16}",$_POST['tname'])) {$error.="Приняты неверные данные отчества<br/>";}
  if(!mb_ereg_match(".{4,}+$",$_POST['login'])){$error.="Приняты неверные данные логина<br/>";}
  if(!mb_ereg_match("(?=.*\d{1})(?=.*[A-Z]{2,})(?=.*\W{3}).{6,20}",$_POST['password'])){$error.="Приняты неверные данные пароля<br/>";}
  if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){$error.="приняты невернрные данные почты<br/>";}
  if($_POST['kurs']==NULL){$error.="Выберите курс";}
  if($error!=NULL){echo $error;include('index.html');die;}
   $zapr=mysqli_query($mysqli,"SELECT login, email FROM variant3");
   $mailin=mysqli_fetch_all($zapr,MYSQLI_NUM);
   for($i=0;$i<count($mailin);$i++)
   {
    for ($n=0;$n<count($mailin[$i]);$n++)
    {
      if ($mailin[$i][$n]==mb_strtolower($_POST['login']) || $mailin[$i][$n]==mb_strtolower($_POST['email'])){return 1; break;}
    }
   }
 }

//Проверка на занятость логина или e-mail
 if (buryat($mysqli)==1){echo "Логин или email уже используется";mysqli_close($mysqli);die;}
 else{
 mysqli_query($mysqli, "INSERT INTO variant3 VALUES ('','".$_POST['name']."','".$_POST['fam']."','".$_POST['tname']."','".mb_strtolower($_POST['email'])."','". mb_strtolower($_POST['login'])."','".$_POST['password']."','".$_POST['zaved']."','".$_POST['kurs']."')");}
    mysqli_close($mysqli);
    include('auth.html');
?>