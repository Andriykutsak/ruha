<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Информация</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

$x=htmlspecialchars(trim($_GET['x']));
switch($x){

 
 case 'qq':

mysql_query("UPDATE `users` SET `xstatus`='1' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qw':

mysql_query("UPDATE `users` SET `xstatus`='2' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qe':

mysql_query("UPDATE `users` SET `xstatus`='3' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qr':

mysql_query("UPDATE `users` SET `xstatus`='4' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qt':

mysql_query("UPDATE `users` SET `xstatus`='5' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;


 case 'qy':

mysql_query("UPDATE `users` SET `xstatus`='6' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qu':

mysql_query("UPDATE `users` SET `xstatus`='7' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qi':

mysql_query("UPDATE `users` SET `xstatus`='8' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qo':

mysql_query("UPDATE `users` SET `xstatus`='9' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qp':

mysql_query("UPDATE `users` SET `xstatus`='10' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qa':

mysql_query("UPDATE `users` SET `xstatus`='11' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qs':

mysql_query("UPDATE `users` SET `xstatus`='12' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qd':

mysql_query("UPDATE `users` SET `xstatus`='13' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qf':

mysql_query("UPDATE `users` SET `xstatus`='14' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;

 case 'qg':

mysql_query("UPDATE `users` SET `xstatus`='15' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;


 case 'qh':

mysql_query("UPDATE `users` SET `xstatus`='16' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;


 case 'qj':

mysql_query("UPDATE `users` SET `xstatus`='17' WHERE `id` = '".($user['id'])."' ");

 echo '<div class="menuxa">Вы успешно сменили свой X-Статус !</div>
<div class="test"><a href="index.php">На главную</a>
';
 break;


 default:

 echo '<div class="meni"></div>';
 echo '

 <div class="menuxa"><img src="img/xstatus/1.png" alt="*" /> <a href="xstatus.php?x=qq"> Готов болтать</a><br /></div>
<div class="menuxa"><img src="img/xstatus/2.png" alt="*" /> <a href="xstatus.php?x=qw"> Не беспокоить</a><br /></div>
<div class="menuxa"><img src="img/xstatus/3.png" alt="*" /> <a href="xstatus.php?x=qe"> Болею</a><br /></div>
<div class="menuxa"><img src="img/xstatus/4.png" alt="*" /> <a href="xstatus.php?x=qr"> Депрессия</a><br /></div>
<div class="menuxa"><img src="img/xstatus/5.png" alt="*" /> <a href="xstatus.php?x=qt"> Думаю</a><br /></div>
 <div class="menuxa"><img src="img/xstatus/6.png" alt="*" /> <a href="xstatus.php?x=qy"> Курю</a><br /></div>
<div class="menuxa"><img src="img/xstatus/7.png" alt="*" /> <a href="xstatus.php?x=qu"> Кушаю</a><br /></div>
<div class="menuxa"><img src="img/xstatus/8.png" alt="*" /> <a href="xstatus.php?x=qi"> Люблю</a><br /></div>
<div class="menuxa"><img src="img/xstatus/9.png" alt="*" /> <a href="xstatus.php?x=qo"> Смотрю тв</a><br /></div>
<div class="menuxa"><img src="img/xstatus/10.png" alt="*" /> <a href="xstatus.php?x=qp"> Слушаю музыку</a><br /></div>
<div class="menuxa"><img src="img/xstatus/11.png" alt="*" /> <a href="xstatus.php?x=qa"> В ванной</a><br /></div>
<div class="menuxa"><img src="img/xstatus/12.png" alt="*" /> <a href="xstatus.php?x=qs"> В туалете</a><br /></div>
<div class="menuxa"><img src="img/xstatus/13.png" alt="*" /> <a href="xstatus.php?x=qd"> Занимаюсь сексом</a><br /></div>
<div class="menuxa"><img src="img/xstatus/14.png" alt="*" /> <a href="xstatus.php?x=qf"> Играю</a><br /></div>
<div class="menuxa"><img src="img/xstatus/15.png" alt="*" /> <a href="xstatus.php?x=qg"> Пью пиво</a><br /></div>
<div class="menuxa"><img src="img/xstatus/16.png" alt="*" /> <a href="xstatus.php?x=qh"> Сонный</a><br /></div>
<div class="menuxa"><img src="img/xstatus/17.png" alt="*" /> <a href="xstatus.php?x=qj"> Безумный</a><br /></div>


 <div class="test"><a href="index.php">На главную</a>
 </div>';

 break;
 }
 }


?>
