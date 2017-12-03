<?php
include_once ('../config.php');

if(!empty($user)){

$site = mysql_fetch_assoc(mysql_query("SELECT * FROM `site`"));

echo '<div class="head"><center>PatikBirds</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">

Пополнение через Webmoney</br>';



echo '</center>
</div>';


echo '<div class="menuxa">Переведите определённую суму на Кош: <b>'.$site['kosh'].'</b><br />
В коментариях укажите: Наш_Сайт,Ваш_Ник

</div>

<div class="test"><a href="/index.php">На главную</a>
</div>';

echo '</div>';

} 

include ('../include/foot.php');

?>
