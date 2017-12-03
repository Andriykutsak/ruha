<?php  
// Устанавливаем соединение с базой данных  
include "config.php"; 
// Переменная хранит число сообщений выводимых на станице  
$num = 11;  
// Извлекаем из URL текущую страницу  
$page = $_GET['page'];  
// Определяем общее число сообщений в базе данных  
$result = mysql_query("SELECT COUNT(*) FROM `chat_no`");  
$posts = mysql_result($result, 0);  
// Находим общее число страниц  
$total = intval(($posts - 1) / $num) + 1;  
// Определяем начало сообщений для текущей страницы  
$page = intval($page);  
// Если значение $page меньше единицы или отрицательно  
// переходим на первую страницу  
// А если слишком большое, то переходим на последнюю  
if(empty($page) or $page < 0) $page = 1;  
  if($page > $total) $page = $total;  
// Вычисляем начиная к какого номера  
// следует выводить сообщения  
$start = $page * $num - $num;  
// Выбираем $num сообщений начиная с номера $start  
$result = mysql_query("SELECT * FROM `chat_no` LIMIT $start, $num");  
// В цикле переносим результаты запроса в массив $postrow  
while ( $postrow[] = mysql_fetch_array($result))  
?>