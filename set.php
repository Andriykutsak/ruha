<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Настройки</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa"><img src="img/ank.png" alt="*" /> <a href="anketa_red.php"> Редактировать Анкету</a><br /></div>
<div class="test"><a href="index.php">На главную</a>
</div>';

echo '</div>';

} 

include_once ('include/foot.php');

?>
