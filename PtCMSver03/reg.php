<?php 

require_once ('config.php');






echo '<div class="head"><center>Регистрация</center></div>';

echo '<div class="menuxa">';
echo "<center>
        <form method='post' action='/reg.php'> 
         Логин: </br>
<input name='login' type='text' ></br>
        Пароль: </br>
<input name='pass' type='password'></br>

Вы:<br />

<select name='pol'><option value='m'>Парень</ option><option value='w'>Девушка</option></select><br />

          Email: </br>
<input name='email' type='text'></br></br>
        <input name='submit' type='submit' value='Сохранить' > 
    </form></center></div>"; 

if($user) {  
header ('Location: rego.php');  
exit();  
}  
if (!empty($_POST['login']) AND !empty($_POST['pass']))  
{  
// фильтрируем логин и пароль  
$email= mysql_real_escape_string(htmlspecialchars($_POST['email'])); 
$login = mysql_real_escape_string(htmlspecialchars($_POST['login']));  
$pol = mysql_real_escape_string(htmlspecialchars($_POST['pol'])); 
$pass = mysql_real_escape_string(htmlspecialchars($_POST['pass'])); 
 

// проверяем есть ли логин в нашей базе данных  
if (mysql_result(mysql_query("SELECT COUNT(*) FROM `users` WHERE `login` = '".$login."' LIMIT 1;"), 0) != 0) 
{  
echo '<div class="menuxa"><b>Выбранный логин уже зарегистрирован!</b></div>'; 
 echo '
<div class="test"><a href="index.php">На главную</a>
</div>';
include_once ('include/foot.php');
exit();  
}  
// заносим данные в таблицу, обратите внимание - пароль кодируем в md5 
mysql_query("INSERT INTO `users` (`login`, `pass`, `pol`,`email`) VALUES ('".$login."', '".md5($pass)."', '".$pol."', '".$email."')");
 
echo '<div class="menuxa">Вы успешно зарегистрированы!</div>';  
header ('Location: rego.php');  
exit();  
}  
echo '</div>';
echo '
<div class="test"><a href="index.php">На главную</a>
</div>';

include_once ('include/foot.php');
?>