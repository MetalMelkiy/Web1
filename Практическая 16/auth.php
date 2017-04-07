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
//функция проверки входящих данных POST с полями login и password на соответствие для авторизации
function auth($mysqli){
   $zapr=mysqli_query($mysqli,"SELECT login, password FROM variant3 where login=\"".$_POST['login']."\"");
   $mailin=mysqli_fetch_array($zapr);
   if ($mailin[0]==mb_strtolower($_POST['login']) && $mailin[1]==$_POST['password']) {
    $zapr=mysqli_query($mysqli,"SELECT * FROM variant3 where login=\"".$_POST['login']."\"");
    $mailin=mysqli_fetch_array($zapr);
    setcookie("name", $mailin[1], time() + 3600*24);
    setcookie("fam", $mailin[2], time() + 3600*24);
    setcookie("tname", $mailin[3], time() + 3600*24);
    setcookie("email", $mailin[4], time() + 3600*24);
    setcookie("login", $mailin[5], time() + 3600*24);
    setcookie("zaved", $mailin[7], time() + 3600*24);
    setcookie("kurs", $mailin[8], time() + 3600*24);
   return 1;
  }
   else {return 0;}
                                }
if (auth($mysqli)==1){mysqli_close($mysqli);header ('Location: cabinet.php');}
else {echo "Введены не правильные данные";include('auth.html');}
?>