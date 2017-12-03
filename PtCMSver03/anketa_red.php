<?
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Кабинет</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';
echo '<div class="meni"></div>';
echo '<div class="menuxa">';


$name = mysql_real_escape_string(htmlspecialchars($_POST['name'])); 
$famil = mysql_real_escape_string(htmlspecialchars($_POST['famil'])); 
$strana = mysql_real_escape_string(htmlspecialchars($_POST['strana']));
$gorod = mysql_real_escape_string(htmlspecialchars($_POST['gorod'])); 
$infos = mysql_real_escape_string(htmlspecialchars($_POST['infos'])); 
$interest = mysql_real_escape_string(htmlspecialchars($_POST['interest'])); 


            if(isset($_POST['infos'])){

 

 mysql_query("UPDATE `users` SET `name` = '".$name."', `famil` = '".$famil."', `strana` = '".$strana."', `gorod` = '".$gorod."', `infos` = '".$infos."', `interest` = '".$interest."' WHERE `id` = '$user[id]' LIMIT 1");

echo '<script type="text/javascript">
 window.location = "anketa.php"
 </script>';
}
            
echo '<center> 
            
<form action="anketa_red.php" method="post">


 <p>Имя: <input type="text" name="name" placeholder="'.$user['name'].'" /></p>

 <p>Фамилия: <input type="text" name="famil" placeholder="'.$user['famil'].'"/></p>

 <p>Страна: <input type="text" name="strana" placeholder="'.$user['strana'].'"/></p>

 <p>Город: <input type="text" name="gorod" placeholder="'.$user['gorod'].'"/></p>

<p>О себе: <textarea maxlength="200" cols="30" rows="2" name="infos" placeholder="'.$user['infos'].'"></textarea></p>

<p>Интересы: <textarea maxlength="50" cols="30" rows="2" name="interest" placeholder="'.$user['interest'].'"></textarea></p>

 <input type="submit" value="Сохранить" /></p>
 </form>

</center>
</div>'; 


     

echo '</div>';

echo '<div class="test"><a href="index.php">На главную</a></div>'; 
}

include_once ('include/foot.php');

?>
