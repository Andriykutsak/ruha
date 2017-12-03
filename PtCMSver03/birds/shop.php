<?php
include_once ('../config.php');

if(!empty($user)){

echo '<div class="head"><center>Тюряга</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">';
 echo 'Список птиц:';

if($user['berds']==5) echo '<center></br><b>Больше нету доступных птиц!</b></center>';

echo '<center>';

if($user['berds']==0) echo '<img src="img/1.png"  alt="*" />
Принесет 20 яиц за 24 часа!';
if($user['patik']>199){ if($user['berds']==0) echo '<a href="shop.php?w=qqq"><b>Купить</b></a></br>';
} else {
if($user['berds']==0) echo '</br><b>Цена: 200 Патиков</b></br>';
}

$w=htmlspecialchars(trim($_GET['w']));
switch($w){

 case 'qqq':

if($user['berds']==0) { if($user['patik']>199) { mysql_query("UPDATE `users` SET `berds` = '".($user['berds']+1)."' WHERE `id` = '".($user['id'])."'"); 
mysql_query("UPDATE `users` SET `patik` = '".($user['patik']-200)."' WHERE `id` = '".($user['id'])."'"); 
}}

echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;


 case 'www':

if($user['berds']==1) { if($user['patik']>499) { mysql_query("UPDATE `users` SET `berds` = '".($user['berds']+1)."' WHERE `id` = '".($user['id'])."'"); 
mysql_query("UPDATE `users` SET `patik` = '".($user['patik']-500)."' WHERE `id` = '".($user['id'])."'"); 
}}
echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'eee':

if($user['berds']==2) { if($user['patik']>999) { mysql_query("UPDATE `users` SET `berds` = '".($user['berds']+1)."' WHERE `id` = '".($user['id'])."'"); 
mysql_query("UPDATE `users` SET `patik` = '".($user['patik']-1000)."' WHERE `id` = '".($user['id'])."'"); 
}}
echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'rrr':

if($user['berds']==3){ if($user['patik']>1199){ mysql_query("UPDATE `users` SET `berds` = '".($user['berds']+1)."' WHERE `id` = '".($user['id'])."'"); 
mysql_query("UPDATE `users` SET `patik` = '".($user['patik']-1200)."' WHERE `id` = '".($user['id'])."'"); 
}}
echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'ttt':

if($user['berds']==4){ if($user['patik']>1999){ mysql_query("UPDATE `users` SET `berds` = '".($user['berds']+1)."' WHERE `id` = '".($user['id'])."'"); 

mysql_query("UPDATE `users` SET `patik` = '".($user['patik']-2000)."' WHERE `id` = '".($user['id'])."'"); 
}}
echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

}

if($user['berds']==1) echo '<img src="img/2.png"  alt="*" />
Принесет 50 яиц за 24 часа!';
if($user['patik']>499){  if($user['berds']==1) echo '<a href="shop.php?w=www"><b>Купить</b></a></br>';
} else {
if($user['berds']==1) echo '</br><b>Цена: 500 Патиков</b></br>';
}

if($user['berds']==2) echo '<img src="img/3.png"  alt="*" />
Принесет 90 яиц за 24 часа!';
if($user['patik']>999){ if($user['berds']==2) echo '<a href="shop.php?w=eee"><b>Купить</b></a></br>';
} else {
if($user['berds']==2) echo '</br><b>Цена: 1 000 Патиков</b></br>';
}

if($user['berds']==3) echo '<img src="img/4.png"  alt="*" />
Принесет 150 яиц за 24 часа!';
if($user['patik']>1199){ if($user['berds']==3) echo '<a href="shop.php?w=rrr"><b>Купить</b></a></br>';
} else {
if($user['berds']==3) echo '</br><b>Цена: 1 200 Патиков</b></br>';
}

if($user['berds']==4) { echo '<img src="img/5.png"  alt="*" />
Принесет 200 яиц за 24 часа!';
if($user['patik']>1999){ if($user['berds']==4) echo '<a href="shop.php?w=ttt"><b>Купить</b></a></br>';
} else {
if($user['berds']==4) echo '</br><b>Цена: 2 000 Патиков</b></br>';
}

} 

echo '</center>
</div>';



echo '<div class="menuxa"> <a href="index.php"> В игру</a><br /></div>
<div class="test"><a href="/index.php">На главную</a>
</div>';

echo '</div>';

} 

include ('../include/foot.php');

?>