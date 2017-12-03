<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Кабинет</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa"><img src="img/ank.png" alt="*" /> <a href="anketa.php"> Анкета</a><br /></div>
<div class="menuxa"><img src="img/ank.png" alt="*" /> <a href="/billing/"> Биллинг</a></div>
<div class="menuxa"><img src="img/ank.png" alt="*" /> <a href="ava.php"> Мой Аватар</a></div>
<div class="menuxa"><img src="img/ank.png" alt="*" /> <a href="set.php"> Настройки</a></div><br />

<div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="smail.php"> Смайлы</a><br /></div>
<div class="menuxa"><img src="img/anko.png" alt="*" /> <a href="rule.php"> Правила</a><br /></div>
<div class="test"><a href="index.php">На главную</a>
</div>';

echo '</div>';

} 

include_once ('include/foot.php');

?>
