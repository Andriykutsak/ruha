<?
//данные о хосте, пользователе и базе данных
$host = 'localhost';
$user = 'root'; 
$pass = ''; 
$dbname = 'ruslan41khaven';
mysql_connect($host,$user,$pass,$dbname) OR die();
mysql_select_db($dbname) OR die('Не удалось выбрать БД!');
mysql_set_charset('utf8');




$user = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `pass` = '".$_SESSION['hash']."' LIMIT 1"));




?>
