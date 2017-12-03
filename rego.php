<?php
include_once ('config.php');
print_r($user);
echo $user['id'];

echo '<div class="head"><center>Успешно!</center></div>';

echo '<div class="meni"></div>';
echo '
<center>
<div class="menuxa">Вы успешно зарегистрировались! </br>
<img src="img/ank.png" alt="*" /><b><a href="index.php"> Войдите под своими данными!</a></b><br /></div>
<div class="test"><a href="index.php">На главную</a>
</div>
</center>';

echo '</div>';


include_once ('include/foot.php');

?>
