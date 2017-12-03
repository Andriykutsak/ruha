<?php 

require_once ('config.php');






echo '<div class="head"><center>Регистрация</center></div>';

echo '<div class="menuxa">';
echo "<center>
        <form method='post' action='/reg.php'> 
   
<input name='login' type='text' placeholder='Ваш логин' id='login'></br>
        
<input name='pass' type='password' placeholder='ваш пароль'id='password'></br>

<input name='status' type='text' placeholder='QIWI Кошелек' id='qivi'></br>

     
<input name='email' type='text' placeholder='Email' id='email'></br></br>
        <input name='submit' type='submit' value='Сохранить' id='send-btn'> 
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
$status = mysql_real_escape_string(htmlspecialchars($_POST['status'])); 
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
mysql_query("INSERT INTO `users` (`login`, `pass`, `status`,`email`) VALUES ('".$login."', '".md5($pass)."', '".$status."', '".$email."')");
 
echo '<center><div class="menuxa">Вы успешно зарегистрированы!</div></center>';  
header ('Location: rego.php');  
exit();  
}  
echo '</div>';
echo '
<center><div class="test"><a href="index.php">На главную</a>
</div></center>';

include_once ('include/foot.php');
?>