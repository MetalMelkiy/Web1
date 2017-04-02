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
//функция проверки входящих данных POST
function auth($mysqli){
   $zapr=mysqli_query($mysqli,"SELECT login, email FROM variant3");
   $mailin=mysqli_fetch_all($zapr,MYSQLI_NUM);
   for($i=0;$i<count($mailin);$i++)
   {
    for ($n=0;$n<count($mailin[$i]);$n++){
      if ($mailin[$i][$n]==mb_strtolower($_POST['login']) || $mailin[$i][$n]==mb_strtolower($_POST['email'])){return 1; break;}
    }
   }
 }
auth($mysqli);

//Проверка на занятость логина или e-mail
 if (auth($mysqli)==1){echo "Логин или email уже используется";}
 else{
 mysqli_query($mysqli, "INSERT INTO variant3 VALUES ('','".$_POST['name']."','".$_POST['fam']."','".$_POST['tname']."','".mb_strtolower($_POST['email'])."','". mb_strtolower($_POST['login'])."','".$_POST['password']."','".$_POST['zaved']."','".$_POST['kurs']."')");}
    mysqli_close($mysqli);
    include('auth.html');
?>