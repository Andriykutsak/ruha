<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Игро-Мир</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa"><center><a href="igromir.php?ii=dd"> Обменник <b>Патиков</b></a></center>
<center>Постов:  ['.$user['post'].']  Патиков:  ['.$user['patik'].']</center></div>';

echo '</div>';


$ii=htmlspecialchars(trim($_GET['ii']));
switch($ii){

 case 'dd':
 
if($user['post']>49){  echo '<div class="menuxa"><a href="igromir.php?ii=gg">Обменять 50 постов на  10 Патиков</a></div>';
} else {
echo '<div class="menuxa"><b>Не достаточно 50 Постов для обмена!</b></div>';
}

if($user['post']>499){  echo '<div class="menuxa"><a href="igromir.php?ii=ff">Обменять 500 постов на  100 Патиков</a></div>';
} 

break;

 case 'gg':
 
if($user['post']>49) mysql_query("UPDATE `users` SET `patik` = '".($user['patik']+10)."' WHERE `id` = '".($user['id'])."'");
if($user['post']>49) mysql_query("UPDATE `users` SET `post` = '".($user['post']-50)."' WHERE `id` = '".($user['id'])."'");

echo '<div class="menuxa">Вы успешно произвели обмен Постов на Патики!50 к 10</div>';

echo '<script type="text/javascript">
 window.location = "igromir.php"
 </script>';

break;

 case 'ff':

if($user['post']>499) mysql_query("UPDATE `users` SET `patik` = '".($user['patik']+100)."' WHERE `id` = '".($user['id'])."'");
if($user['post']>499) mysql_query("UPDATE `users` SET `post` = '".($user['post']-500)."' WHERE `id` = '".($user['id'])."'");

echo '<div class="menuxa">Вы успешно произвели обмен Постов на Патики!500 к 100</div>';

echo '<script type="text/javascript">
 window.location = "igromir.php"
 </script>';

break;

} 


echo '<div class="menuxa"><img src="img/ico/blueegg.png"  with="30" height="30" alt="*" /><a href="/birds/"> <b>PatikBirds</b></a></div>';

echo '<div class="test"><a href="index.php">На главную</a>
</div>';

}

include_once ('include/foot.php');

?>
