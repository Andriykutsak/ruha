<?php
include_once ('config.php');

if(!empty($user)){
if($user['admin']==4) {

echo '<div class="head"><center>Кабинет</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';
echo '
<div class="menuxa"><img src="img/777.png" alt="*" /> <a href="dle_chat.php"> Комнаты</a><br /></div>
<div class="menuxa"><img src="img/777.png" alt="*" /> <a href="admin_b.php?zz=ne"> Новости</a><br /></div>
<div class="menuxa"><img src="img/777.png" alt="*" /> <a href="admin_b.php?zz=copyr"> Копирайт</a></div>
<div class="menuxa"><img src="img/777.png" alt="*" /> <a href="admin_b.php?zz=kosh"> Реквизиты</a></div>
<div class="menuxa"><img src="img/777.png" alt="*" /> <a href="admin_b.php?zz=title"> Заголовок</a></div>
<div class="test"><a href="index.php">На главную</a>
</div>';

echo '</div>';
}
} 

include_once ('include/foot.php');

?>
