<?
//данные о хосте, пользователе и базе данных
$host = 'localhost';
$user = 'cra679_zz'; 
$pass = '123321qqq'; 
$dbname = 'cra679_zz';
mysql_connect($host,$user,$pass) OR die('Не удалось подключиться к серверу MySql!');
mysql_select_db($dbname) OR die('Не удалось выбрать БД!');
mysql_set_charset('utf8');



session_start();
$user = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['id']."' LIMIT 1"));

?>
