<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Беспредел</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="menuxa">';

if($user['admin']>1) echo '</div><div class="test">';
if($user['admin']>1) echo '&laquo; <a href="dle_chat.php?dle=bes">Очистить комнату!</a><br/>';
if($user['admin']>1) echo '</div><div class="menuxa">';


$chat_noz = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_bes`"), 0); 
                                        if($chat_noz == '0') { 
                                        echo '<div class="menuxa"><b>В комнате пусто :(</b></div>'; 
                                        }


$num = 15;
$page = $_GET['page'];
$result00 = mysql_query("SELECT COUNT(*) FROM `chat_bes`");
$temp = mysql_fetch_array($result00);
$posts = $temp[0];
$total = (($posts - 1) / $num) + 1;
$total =  intval($total);
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;	



$ooo=mysql_query("SELECT * FROM `chat_bes` ORDER BY id DESC LIMIT $start, $num");

while($chat_bes=mysql_fetch_array($ooo))

{ 

if($chat_bes['pol']==m)  echo '<p>'.$chat_bes['id'].'.  <img src="img/pol/m.png" alt="*" /><a href="pro.php?id='.$chat_bes[id_us].'"><b> '.htmlspecialchars($chat_bes['name']).'</b></a>: '.smile(nl2br($chat_bes['msg'])).'</p>';
if($chat_bes['pol']==w)  echo '<p>'.$chat_bes['id'].'.  <img src="img/pol/w.png" alt="*" /><a href="pro.php?id='.$chat_bes[id_us].'"><b> '.htmlspecialchars($chat_bes['name']).'</b></a>: '.smile(nl2br($chat_bes['msg'])).'</p>';
}
 echo '<center>';
// Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<a href=chat_bes.php?page=1><b>&#171;</b></a> | <a href=chat_bes.php?page='. ($page - 1) .'>Предыдущая</a> | ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' | <a href=chat_bes.php?page='. ($page + 1) .'>Следующая</a> | <a href=chat_bes.php?page=' .$total. '><b>&#187;</b></a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 5 > 0) $page5left = ' <a href=chat_bes.php?page='. ($page - 5) .'>'. ($page - 5) .'</a> | ';
if($page - 4 > 0) $page4left = ' <a href=chat_bes.php?page='. ($page - 4) .'>'. ($page - 4) .'</a> | ';
if($page - 3 > 0) $page3left = ' <a href=chat_bes.php?page='. ($page - 3) .'>'. ($page - 3) .'</a> | ';
if($page - 2 > 0) $page2left = ' <a href=chat_bes.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href=chat_bes.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';

if($page + 5 <= $total) $page5right = ' | <a href=chat_bes.php?page='. ($page + 5) .'>'. ($page + 5) .'</a>';
if($page + 4 <= $total) $page4right = ' | <a href=chat_bes.php?page='. ($page + 4) .'>'. ($page + 4) .'</a>';
if($page + 3 <= $total) $page3right = ' | <a href=chat_bes.php?page='. ($page + 3) .'>'. ($page + 3) .'</a>';
if($page + 2 <= $total) $page2right = ' | <a href=chat_bes.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href=chat_bes.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';

// Вывод меню если страниц больше одной

if ($total > 1)
{
Error_Reporting(E_ALL & ~E_NOTICE);
echo "<div class=\"menuxa\">";
echo $pervpage.$page5left.$page4left.$page3left.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$page3right.$page4right.$page5right.$nextpage;
echo "</center>";
echo "</div>";
}

echo '</br>';

echo '</div>';

echo '<div class="menuxa">';	



echo '<center><form action="chat_bes.php" method="post">


Сообщение: [<a href="/chat_bes.php">обновить</a>]: </br>

<p><textarea maxlength="300" cols="30" rows="7" name="msg"></textarea></p></br>';

echo '<input type="submit" value="Отправить" /></p>
</form></center>';



$msg = mysql_real_escape_string(htmlspecialchars($_POST['msg'])); 


if(!empty($_POST['msg'])){

mysql_query("INSERT INTO `chat_bes` SET `msg` = '".$msg."', `pol` = '".mysql_real_escape_string($user['pol'])."', `id_us` = '".intval($user['id'])."', `name` = '".mysql_real_escape_string($user['login'])."' ");

mysql_query("UPDATE `users` SET `reit` = '".($user['reit']+1)."' WHERE `id` = '".($user['id'])."'"); 

mysql_query("UPDATE `users` SET `post` = '".($user['post']+1)."' WHERE `id` = '".($user['id'])."'"); 

echo '<script type="text/javascript">
 window.location = "chat_bes.php"
 </script>';
}

if($user['admin']>1) echo '<center><form action="chat_bes.php" method="post">
Удалить пост №(ID): </br>

<p><textarea maxlength="10" cols="1" rows="1" name="id"></textarea></p></br>';

if($user['admin']>1) echo '<input type="submit" value="Удалить" /></p>
</form></center>';

if(!empty($_POST['id'])){
if($user['admin']>1) mysql_query("delete from `chat_bes` where (`id` = '".$_POST['id']."')");
echo '<script type="text/javascript">
 window.location = "chat_bes.php"
 </script>';
}

echo '</div>';

echo '<div class="test"><a href="index.php">На главную</a></div>'; 

}

include_once ('include/foot.php');

?>