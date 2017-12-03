<?php
include_once ('config.php');

if(!empty($user)){


$oggy = mysql_query("SELECT * FROM `users` WHERE `id` = '".abs(intval($_GET[id]))."' LIMIT 1");
 $og=mysql_fetch_array($oggy);

echo '<div class="head"><center>'.$og['login'].'</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';


if($og["bans"]>0){
if($user["admin"]>0){

echo '<div class="menuxa">';
echo '<center><form action="pro.php?id='.$og['id'].'" method="post">

<select name="bans" size="1">
 <option value="0">Разбанить пользователя</option>
 </select>';

echo '<input type="submit" value="Разбан" /></p>
</form></center></div>';


$bn = mysql_real_escape_string(htmlspecialchars($_POST['bans'])); 


if(isset($_POST['bans'])){

mysql_query("UPDATE `users` SET `bans` = '".$bn."' WHERE `id` = '".abs(intval($_GET[id]))."'  ");


echo '<script type="text/javascript">
 window.location = "pro.php?id='.$og['id'].'"
 </script>';

}
}
}





if($og["bans"]==0){
if($user["admin"]>0){

echo '<div class="menuxa">';
echo '<center><form action="pro.php?id='.$og['id'].'" method="post">

Бан (24 часа): </br>

<select name="bans" size="1">
 <option value="">БАН 24 часа</option>
 </select>';

echo '<input type="submit" value="Забанить" /></p>
</form></center></div>';


$bans = mysql_real_escape_string(htmlspecialchars($_POST['bans'])); 


if(isset($_POST['bans'])){

mysql_query("UPDATE `users` SET `bans`='".(time()+(3600*24*1))."' WHERE `id` = '".abs(intval($_GET[id]))."' ");

echo '<script type="text/javascript">
 window.location = "pro.php?id='.$og['id'].'"
 </script>';

}
}
}


if($user["admin"]>0){

echo '<div class="menuxa">';
echo '<center><form action="pro.php?id='.$og['id'].'" method="post">

Блокировка (навечно): </br>

<select name="izgnali" size="2">
 <option value="0">Разблокирован</option>
 <option value="1">Заблокирован</option>
 </select>';

echo '<input type="submit" value="Изменить" /></p>
</form></center></div>';


$izgnali = mysql_real_escape_string(htmlspecialchars($_POST['izgnali'])); 


if(isset($_POST['izgnali'])){

mysql_query("UPDATE `users` SET `izgnali` = '".$izgnali."' WHERE `id` = '".abs(intval($_GET[id]))."'  ");

echo '<script type="text/javascript">
 window.location = "pro.php?id='.$og['id'].'"
 </script>';

}
}

if($og['bans']>0) {

$lllll = mysql_result(mysql_query("SELECT `bans` FROM `users`  WHERE `id` = '".abs(intval($_GET[id]))."' "), 0) - time();

echo'<div class="menuxa">';
echo '<center><b>Пользователь забанен!</b></center>';
echo'</div>';

echo'<div class="menuxa">';
echo 'Конец БАНА через: '.time_autoformat($lllll,1).' ';
echo'</div>';
}

if($og['izgnali']==1) echo '<div class="menuxa"><font color="red"><b>ВНИМАНИЕ анкета пользователя заморожена,и не подлежит востановлению!</b></font></div>';

echo '<div class="menuxa">

<img src="img/ava.png" alt="*" />'; 

if($og["xstatus"]==1) echo '<img src="img/xstatus/1.png" alt="*" /> Готов болтать';
if($og["xstatus"]==2) echo '<img src="img/xstatus/2.png" alt="*" /> Не беспокоить';
if($og["xstatus"]==3) echo '<img src="img/xstatus/3.png" alt="*" /> Болею';
if($og["xstatus"]==4) echo '<img src="img/xstatus/4.png" alt="*" /> Депрессия';
if($og["xstatus"]==5) echo '<img src="img/xstatus/5.png" alt="*" /> Думаю';
if($og["xstatus"]==6) echo '<img src="img/xstatus/6.png" alt="*" /> Курю';
if($og["xstatus"]==7) echo '<img src="img/xstatus/7.png" alt="*" /> Кушаю';
if($og["xstatus"]==8) echo '<img src="img/xstatus/8.png" alt="*" /> Люблю';
if($og["xstatus"]==9) echo '<img src="img/xstatus/9.png" alt="*" /> Смотрю ТВ';
if($og["xstatus"]==10) echo '<img src="img/xstatus/10.png" alt="*" /> Слушаю музыку';
if($og["xstatus"]==11) echo '<img src="img/xstatus/11.png" alt="*" /> В ванной';
if($og["xstatus"]==12) echo '<img src="img/xstatus/12.png" alt="*" /> В туалете';
if($og["xstatus"]==13) echo '<img src="img/xstatus/13.png" alt="*" /> Занимаюсь сексом';
if($og["xstatus"]==14) echo '<img src="img/xstatus/14.png" alt="*" /> Играю';
if($og["xstatus"]==15) echo '<img src="img/xstatus/15.png" alt="*" /> Пью пиво';
if($og["xstatus"]==16) echo '<img src="img/xstatus/16.png" alt="*" /> Сонный';
if($og["xstatus"]==17) echo '<img src="img/xstatus/17.png" alt="*" /> Безумный';

echo '</div>';
echo '<div class="menuxa"><b> Статус:</b>  '.$og['status'].'<br /></div></br>';

if($og["admin"]==0) echo '<div class="menuxa">&#920; Должность: <b>Пользователь</b><br /></div>';
if($og["admin"]==1) echo '<div class="menuxa">&#920; Должность: <font color="Blue"><b>Модер</b></font><br /></div>';
if($og["admin"]==2) echo '<div class="menuxa">&#920; Должность: <font color="OrangeRed"><b>Ст.Модер</b></font><br /></div>';
if($og["admin"]==3) echo '<div class="menuxa">&#920; Должность: <font color="Red"><b>Админ</b></font><br /></div>';
if($og["admin"]==4) echo '<div class="menuxa">&#920; Должность: <font color="DarkViolet"><b>Создатель</b></font><br /></div>';


if($user["admin"]==4){

echo '<div class="menuxa">';
echo '<center><form action="pro.php?id='.$og['id'].'" method="post">

Должность: </br>

<select name="admin" size="2">
<option value="0">Пользователь</option>
 <option value="1">Модер</option>
 <option value="2">Ст.Модер</option>
 <option value="3">Админ</option>
 <option value="4">Создатель</option>
 </select>';

echo '<input type="submit" value="Изменить" /></p>
</form></center></div>';


$admin = mysql_real_escape_string(htmlspecialchars($_POST['admin'])); 


if(isset($_POST['admin'])){

mysql_query("UPDATE `users` SET `admin` = '".$admin."' WHERE `id` = '".abs(intval($_GET[id]))."'  ");

echo '<script type="text/javascript">
 window.location = "pro.php?id='.$og['id'].'"
 </script>';

}
}


echo '<div class="menuxa">
&#164; Имя: '.$og['name'].'<br />
&#164; Фамилия: '.$og['famil'].'<br />
&#164; Страна: '.$og['strana'].'<br />
&#164; Город: '.$og['gorod'].'<br /></div>

<div class="menuxa">&#248; Рейтинг: '.$og['reit'].'<br /></div>';


if($og["reit"]>0 && $og["reit"]<51)  echo '<div class="menuxa">&#248; Ранг: <b>Новичок</b><br /></div>';

if($og["reit"]>52 && $og["reit"]<151) echo '<div class="menuxa">&#248; Ранг: <b>Продвинутый</b><br /></div>';

if($og["reit"]>152 && $og["reit"]<391)  echo '<div class="menuxa">&#248; Ранг: <b>Наш человек</b><br /></div>';

if($og["reit"]>392 && $og["reit"]<901)  echo '<div class="menuxa">&#248; Ранг: <b>Свой человек</b><br /></div>';



echo '<div class="menuxa">&#164; О себе: '.$og['infos'].'<br /></div>

<div class="menuxa">&#164; Интересы: '.$og['interest'].'<br /></div>


<div class="test"><a href="index.php">На главную</a></div>';

echo '</div>';
} 

include_once ('include/foot.php');

?>