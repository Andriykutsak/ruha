<?php
include_once ('../config.php');

if(!empty($user)){

echo '<div class="head"><center>PatikBirds</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">

Патиков:  ['.$user['patik'].'] </br>';


if($user['berds']==0) echo '
<center><img src="5.png"  alt="*" />';

if($user['berds']==1){ echo ' <b>Ваша птица:</b>
<center><img src="img/1.png"  alt="*" />';
if($user['time']==0) echo '<a href="root.php?egg=one">Собрать яйца</a>';
}

if($user['berds']==2){ echo ' <b>Ваша птица:</b>
<center><img src="img/2.png"  alt="*" />';
if($user['time']==0) echo '<a href="root.php?egg=to">Собрать яйца</a>';
}

if($user['berds']==3){ echo ' <b>Ваша птица:</b>
<center><img src="img/3.png"  alt="*" />';
if($user['time']==0) echo '<a href="root.php?egg=sre">Собрать яйца</a>';
}

if($user['berds']==4){ echo ' <b>Ваша птица:</b>
<center><img src="img/4.png"  alt="*" />';
if($user['time']==0) echo '<a href="root.php?egg=fo">Собрать яйца</a>';
}

if($user['berds']==5){ echo ' <b>Ваша птица:</b>
<center><img src="img/5.png"  alt="*" />';
if($user['time']==0) echo '<a href="root.php?egg=fi">Собрать яйца</a>';
}

$us_time = mysql_result(mysql_query("SELECT `time` FROM `users`  WHERE `id` = '".($user['id'])."'"), 0) - time();

if($us_time<=0)
{
mysql_query("UPDATE `users` SET `time`='0' WHERE `id` = '".($user['id'])."'"); 
}
else
{
echo 'До сбора: '.time_autoformat($us_time,1).' ';
}

echo '</center>
</div>';


echo '<div class="menuxa"><img src="1.png" alt="*" /> <a href="shop.php"> Купить птицу</a><br /></div>
<div class="menuxa"><img src="2.png" alt="*" /> <a href="one.php"> Продажа яиц</a> <b>('.$user['egg'].')</b><br /></div>
<div class="test"><a href="/index.php">На главную</a>
</div>';

echo '</div>';

} 

include ('../include/foot.php');

?>
