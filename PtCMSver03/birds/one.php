<?php
include_once ('../config.php');

if(!empty($user)){

echo '<div class="head"><center>PatikBirds</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">
<center>';


$aa=htmlspecialchars(trim($_GET['aa']));
switch($aa){


 case 'gg':
 
if($user['egg']>99) mysql_query("UPDATE `users` SET `patik` = '".($user['patik']+100)."' WHERE `id` = '".($user['id'])."'");
if($user['egg']>99) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']-100)."' WHERE `id` = '".($user['id'])."'");

echo '<div class="menuxa">Продажа прошла успешно!</div>';

echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;


} 


if($user['egg']>99){  echo '<img src="eg1.png"  alt="*" /><a href="one.php?aa=gg"> Продать 100 шт.</a></div>';
} else {
echo '<div class="menuxa"><b>Как минимум должно быть 100 шт. для обмена!</b></div>';
}


echo '</center>
</div>



<div class="menuxa"> <a href="index.php"> В игру</a><br /></div>
<div class="test"><a href="/index.php">На главную</a>
</div>';

echo '</div>';

} 

include ('../include/foot.php');

?>