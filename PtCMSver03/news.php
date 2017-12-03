<?php
include_once ('config.php');

if(!empty($user)){


echo '<div class="head"><center>Кабинет</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="menuxa">';

$news_c = mysql_result(mysql_query("SELECT COUNT(*) FROM `news`"), 0); 
 if($news_c == '0') { 
                                        echo '<div class="menuxa"><b>Новостей нету :(</b></div>'; 
                                        }

$nee=mysql_query("SELECT * FROM `news`");


// берем результаты из каждой строки

while($nev=mysql_fetch_array($nee))

{ // выводим данные


echo '<div class="menuxa">';
echo '<b><p>№'.$nev['id'].'. Новость:</p></b>';
 echo '<p> <b>'.$nev['name'].'</b>: '.smile($nev['text']).'<br /></p></div><br />';


} 


echo '</div>';

echo '
<div class="test"><a href="index.php">На главную</a></div>';
}

include_once ('include/foot.php');
?>
