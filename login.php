<?php include_once 'config.php';
if ($_GET['logout']) {
   session_start();
session_unset();
session_destroy();
    setcookie('hash',null,time()-3600);
   
}
if (!empty($_COOKIE['hash'])) {
	  $_SESSION['hash']=$_COOKIE['hash'];   
    header('Location: index.php');
}
else{

if(!empty($_POST['login']) AND !empty($_POST['pass'])){ 

$login = mysql_real_escape_string(htmlspecialchars($_POST['login'])); 
$pass = mysql_real_escape_string(htmlspecialchars($_POST['pass']));

$q = mysql_query("SELECT `id` FROM `users` WHERE `login` = '".$login."' AND `pass` = '".md5($pass)."' LIMIT 1");
    if (mysql_num_rows($q) != 0) {
                
$userCookie=mysql_fetch_assoc(mysql_query("SELECT `pass` FROM `users`  WHERE `login` = '".$login."' AND `pass` = '".md5($pass)."' LIMIT 1"));
    setcookie("hash", $userCookie['pass'], time()+60*60*24*30); 
      $_SESSION['hash']=$_COOKIE['hash'];   
    header('Location: index.php');
    }
    else{
        
        header('Location: err.php');
    };
} else{

echo '<div class="head"><center>Партнерка</center></div>';

echo '<div class="menuxa">';



echo '<center><h2><b>AndroFiles</b></h2></center></div></br>';

echo '<div class="head"><center>Вход</center></div>';
echo '<div class="menuxa">';
echo '<center>

<form action="login.php" method="POST"> 
<input name="login" id="login" type="text" placeholder="Ваш ник" /><br />

<input name="pass" id="password" type="password" placeholder="Ваш пароль" /><br /> 

<input type="submit" value="Войти" id="send-btn">  
 </form>

</center><br />';
echo '</div>';

echo '<center><div class="test"><a href="reg.php"> Регистрация</a><br /></center>';

echo '</div>';}	
}



 ?>