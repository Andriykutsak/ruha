<?php
include_once ('config.php');

if(!empty($user)){
if($user['admin']>1){

echo '<div class="head"><center>Информация</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

$dle=htmlspecialchars(trim($_GET['dle']));
switch($dle){

 case 'newus':
mysql_query("TRUNCATE TABLE `chat_no`");
 echo '<div class="menuxa">Комната "Новичок?Сюда!" успешно очищена!</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'znak':
mysql_query("TRUNCATE TABLE `chat_za`");
 echo '<div class="menuxa">Комната "Знакомства" успешно очищена!</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'smex':
mysql_query("TRUNCATE TABLE `chat_se`");
 echo '<div class="menuxa">Комната "Смех" успешно очищена!</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'sex':
mysql_query("TRUNCATE TABLE `chat_sex`");
 echo '<div class="menuxa">Комната  "Sex Party (+18)" успешно очищена!</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'bes':
mysql_query("TRUNCATE TABLE `chat_bes`");
 echo '<div class="menuxa">Комната "Беспредел" успешно очищена!</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;


 default:

 echo '<div class="meni"></div>';
 echo '
 <div class="menuxa"><img src="img/99.png" alt="*" /> <a href="dle_chat.php?dle=newus"> Новичок?Сюда! (Очистить)</a><br /></div>
 <div class="menuxa"><img src="img/99.png" alt="*" /> <a href="dle_chat.php?dle=znak"> Знакомства (Очистить)</a><br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="dle_chat.php?dle=smex"> Смех (Очистить)</a><br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="dle_chat.php?dle=sex"> Sex Party (+18) (Очистить)</a><br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="dle_chat.php?dle=bes"> Беспредел (Очистить)</a><br /></div>
 <div class="test"><a href="index.php">На главную</a>
 </div>';

 break;
 }
 }
 }


include_once ('include/foot.php');

?>