<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Смайлы</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';


echo '<div class="menuxa">';


$o=mysql_query("SELECT * FROM `smile`");


while($sm=mysql_fetch_array($o))

{ 
 echo '<p>'.$sm['name'].'  <img src="/img/smile/'.$sm['icon'].'" alt="'.$sm['name'].'"/></b></p>';



} 

echo '</br>';

echo '</div>';


echo '<div class="test"><a href="index.php">На главную</a></div>'; 

}

include_once ('include/foot.php');

?>