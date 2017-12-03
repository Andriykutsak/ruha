<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Информация</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

$ku=htmlspecialchars(trim($_GET['ku']));
switch($ku){

 case 'newus':
 echo '<div class="menuxa">"Новичок?Сюда!" - Комната для общения новичков)</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'znak':
 echo '<div class="menuxa">"Знакомства" - Комната для знакомств)</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'smex':
 echo '<div class="menuxa">"Смех" - Комната юмора,веселых анекдотов)</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'sex':
 echo '<div class="menuxa">"Sex Party (+18)" - Комната для интим обсуждений)(Внимание вход только для тех,кому исполнилось 18)</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;

 case 'bes':
 echo '<div class="menuxa">"Беспредел" - Комната где не действуют правила)(Внимание вход только для тех,кому исполнилось 18)</div>
<div class="test"><a href="index.php">На главную</a></div>
';
 break;


 default:

 echo '<div class="meni"></div>';
 echo '
 <div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="info.php?ku=newus"> Новичок?Сюда!</a><br /></div>
 <div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="info.php?ku=znak"> Знакомства</a><br /></div>
<div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="info.php?ku=smex"> Смех</a><br /></div>
<div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="info.php?ku=sex"> Sex Party (+18)</a><br /></div>
<div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="info.php?ku=bes"> Беспредел</a><br /></div>
 <div class="test"><a href="index.php">На главную</a>
 </div>';

 break;
 }
 }


include_once ('include/foot.php');

?>