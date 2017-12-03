<?php
include_once ('../config.php');

if(!empty($user)){

echo '<div class="head"><center>PatikBirds</center></div>';
echo '<div class="kabi"><center><a href="/kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa">

Баланс:  ['.$user['bablo'].'] руб.</br>';



echo '</center>
</div>';


echo '<div class="menuxa"><img src="1.png" alt="*" /> <a href="sposob.php"> Пополнить баланс через Webmoney</a><br /></div>

<div class="test"><a href="/index.php">На главную</a>
</div>';

echo '</div>';

} 

include ('../include/foot.php');

?>
