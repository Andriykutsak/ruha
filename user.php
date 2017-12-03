<?
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Кабинет</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';



$num = 10;
$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM `users`");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;	



$q=mysql_query("SELECT `id`,`login`,`pol` FROM `users` ORDER BY id LIMIT $start, $num ");
while ($ank = mysql_fetch_assoc($q)){

echo '<div class="menuxa">';

if($ank['pol']==m) echo '<img src="img/pol/m.png" alt="*" />'; 
if($ank['pol']==w)  echo '<img src="img/pol/w.png" alt="*" />'; 


echo '<a href="pro.php?id='.$ank[id].'"> '.htmlspecialchars($ank['login']).' </a>'; 

echo '</div>';
}

 echo '';
// Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<a href=user.php?page=1><b>&#171;</b></a> | <a href=user.php?page='. ($page - 1) .'>Предыдущая</a> | ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' | <a href=user.php?page='. ($page + 1) .'>Следующая</a> | <a href=user.php?page=' .$total. '><b>&#187;</b></a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 5 > 0) $page5left = ' <a href=user.php?page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=user.php?page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=user.php?page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=user.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=user.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=user.php?page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=user.php?page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=user.php?page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=user.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=user.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню если пользователей больше 1

if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"menuxa\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</center>";
echo "</div>";
}


echo '
<div class="test"><a href="index.php">На главную</a>
</div>';
}


include_once ('include/foot.php');
?>
