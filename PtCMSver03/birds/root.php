<?php
include_once ('../config.php');

if(!empty($user)){

echo '<div class="head"><center>Тюряга</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">';

 echo '<center></br><b>Яйца успешно собраны!</b></center>';

echo '<center>';


$egg=htmlspecialchars(trim($_GET['egg']));
switch($egg){

 case 'one':

if($user['berds']==1) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']+20)."' WHERE `id` = '".($user['id'])."'");
if($user['time']==0) mysql_query("UPDATE `users` SET `time`='".(time()+(3600*24*1))."' WHERE `id` = '".($user['id'])."'");


echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'to':

if($user['berds']==2) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']+50)."' WHERE `id` = '".($user['id'])."'");
if($user['time']==0) mysql_query("UPDATE `users` SET `time`='".(time()+(3600*24*1))."' WHERE `id` = '".($user['id'])."'");


echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'sre':

if($user['berds']==3) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']+90)."' WHERE `id` = '".($user['id'])."'");
if($user['time']==0) mysql_query("UPDATE `users` SET `time`='".(time()+(3600*24*1))."' WHERE `id` = '".($user['id'])."'");


echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;


 case 'fo':

if($user['berds']==4) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']+150)."' WHERE `id` = '".($user['id'])."'");
if($user['time']==0) mysql_query("UPDATE `users` SET `time`='".(time()+(3600*24*1))."' WHERE `id` = '".($user['id'])."'");


echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;

 case 'fi':

if($user['berds']==5) mysql_query("UPDATE `users` SET `egg` = '".($user['egg']+200)."' WHERE `id` = '".($user['id'])."'");
if($user['time']==0) mysql_query("UPDATE `users` SET `time`='".(time()+(3600*24*1))."' WHERE `id` = '".($user['id'])."'");


echo '<script type="text/javascript">
 window.location = "index.php"
 </script>';

break;


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