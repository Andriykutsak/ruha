<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Главная</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет ('.$user['login'].')</a>'; 
if($user['admin']==4) echo '<a href="admin.php">   -_<img src="img/admin.png" alt="*" />_-</a></center>';

echo '</div>';

$chat_no = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_no`"), 0); 
$chat_za = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_za`"), 0); 
$chat_se = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_se`"), 0); 
$chat_sex = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_sex`"), 0); 
$chat_bes = mysql_result(mysql_query("SELECT COUNT(*) FROM `chat_bes`"), 0); 

$usi = mysql_result(mysql_query("SELECT COUNT(*) FROM `users`"), 0); 
$neww = mysql_result(mysql_query("SELECT COUNT(*) FROM `news`"), 0); 

echo '<div class="meni"></div>';
echo '
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="chat_no.php"> Новичок?Сюда!</a> (<b>'.$chat_no.'</b>)<br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="chat_za.php"> Знакомства</a> (<b>'.$chat_za.'</b>)<br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="chat_se.php"> Смех </a> (<b>'.$chat_se.'</b>)<br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="chat_sex.php"> Sex Party (+18)</a> (<b>'.$chat_sex.'</b>)<br /></div>
<div class="menuxa"><img src="img/99.png" alt="*" /> <a href="chat_bes.php"> Беспредел (+18)</a> (<b>'.$chat_bes.'</b>)<br /></div><br />

<div class="menuxa"><img src="img/igro.png" alt="*" /> <a href="igromir.php"> Игро-мир</a><br /></div>
<div class="menuxa"><img src="img/new.png" alt="*" /> <a href="news.php"> Новости</a> (<b>'.$neww.'</b>)<br /></div>
<div class="menuxa"><img src="img/info.png" alt="*" /> <a href="info.php"> Информация</a><br /></div>
<div class="menuxa"><img src="img/user.png" alt="*" /> <a href="user.php"> Пользователи</a> (<b>'.$usi.'</b>)<br /></div>
<div class="test"><a href="exit.php"> Выход</a>
</div>';

echo '</div>';

} else {

if(!empty($_POST['login']) AND !empty($_POST['pass']))  
{ 

$login = mysql_real_escape_string(htmlspecialchars($_POST['login'])); 
$pass = mysql_real_escape_string(htmlspecialchars($_POST['pass']));

$q = mysql_query("SELECT `id` FROM `users` WHERE `login` = '".$login."' AND `pass` = '".md5($pass)."' LIMIT 1");
	if (mysql_num_rows($q) != 0) {
	$_SESSION['id'] =  mysql_result($q, 0);
	
 	header('Location: index.php');

	}
	else header('Location: err.php');
} 



echo '<div class="head"><center>Чат</center></div>';

echo '<div class="menuxa">';



echo '<center><h2><b>'.$_SERVER[HTTP_HOST].'</b></h2></center></div></br>';

echo '<div class="head"><center>Вход</center></div>';
echo '<div class="menuxa">';
echo '<center>

<form action="index.php" method="POST"> 
Введите ник:<br /> 
<input name="login" id="login" type="text" placeholder="Ваш ник" /><br />
Введите пароль:<br /> 
<input name="pass" id="password" type="password" placeholder="Ваш пароль" /><br /> 

<input type="submit" value="Войти">  
 </form>

</center><br />';
echo '</div>';

echo '<div class="test"><a href="reg.php"> Регистрация</a><br />';

echo '</div>';


}

include_once ('include/foot.php');

?>
