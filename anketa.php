<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Анкета</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

echo '<div class="meni"></div>';


echo '<div class="menuxa">';

echo (empty($user['avatar'])?'<img src="../avatars/notnull.png" alt="*" style="max-width: 210px; max-height: 210px;">':'<img src="../avatars/'.$user['avatar'].'" alt="*" style="max-width: 210px; max-height: 210px;">');

$usi = mysql_result(mysql_query("SELECT COUNT(*) FROM `users`"), 0); 


if($user["xstatus"]==1) echo '<img src="img/xstatus/1.png" alt="*" /><a href="xstatus.php"> Готов болтать</a>';
if($user["xstatus"]==2) echo '<img src="img/xstatus/2.png" alt="*" /><a href="xstatus.php"> Не беспокоить</a>';
if($user["xstatus"]==3) echo '<img src="img/xstatus/3.png" alt="*" /><a href="xstatus.php"> Болею</a>';
if($user["xstatus"]==4) echo '<img src="img/xstatus/4.png" alt="*" /><a href="xstatus.php"> Депрессия</a>';
if($user["xstatus"]==5) echo '<img src="img/xstatus/5.png" alt="*" /><a href="xstatus.php"> Думаю</a>';
if($user["xstatus"]==6) echo '<img src="img/xstatus/6.png" alt="*" /><a href="xstatus.php"> Курю</a>';
if($user["xstatus"]==7) echo '<img src="img/xstatus/7.png" alt="*" /><a href="xstatus.php"> Кушаю</a>';
if($user["xstatus"]==8) echo '<img src="img/xstatus/8.png" alt="*" /><a href="xstatus.php"> Люблю</a>';
if($user["xstatus"]==9) echo '<img src="img/xstatus/9.png" alt="*" /><a href="xstatus.php"> Смотрю ТВ</a>';
if($user["xstatus"]==10) echo '<img src="img/xstatus/10.png" alt="*" /><a href="xstatus.php"> Слушаю музыку</a>';
if($user["xstatus"]==11) echo '<img src="img/xstatus/11.png" alt="*" /><a href="xstatus.php"> В ванной</a>';
if($user["xstatus"]==12) echo '<img src="img/xstatus/12.png" alt="*" /><a href="xstatus.php"> В туалете</a>';
if($user["xstatus"]==13) echo '<img src="img/xstatus/13.png" alt="*" /><a href="xstatus.php"> Занимаюсь сексом</a>';
if($user["xstatus"]==14) echo '<img src="img/xstatus/14.png" alt="*" /><a href="xstatus.php"> Играю</a>';
if($user["xstatus"]==15) echo '<img src="img/xstatus/15.png" alt="*" /><a href="xstatus.php"> Пью пиво</a>';
if($user["xstatus"]==16) echo '<img src="img/xstatus/16.png" alt="*" /><a href="xstatus.php"> Сонный</a>';
if($user["xstatus"]==17) echo '<img src="img/xstatus/17.png" alt="*" /><a href="xstatus.php"> Безумный</a>';

echo '</div>';
echo '<div class="menuxa"><a href="anketa.php?an=status"><img src="img/status.png" alt="*" /></a><b> Статус:</b>  '.$user['status'].'<br /></div></br>';
$an=htmlspecialchars(trim($_GET['an']));
switch($an){

 case 'status':

echo '<div class="menuxa">';
echo '<center><form action="anketa.php?an=status" method="post">


Статус: </br>

<p><textarea maxlength="120" cols="30" rows="4" name="status" placeholder="'.$user['status'].'"></textarea></p></br>';

echo '<input type="submit" value="Сохранить" /></p>
</form></center></div>';


$status = mysql_real_escape_string(htmlspecialchars($_POST['status'])); 


if(isset($_POST['status'])){

mysql_query("UPDATE `users` SET `status` = '".$status."' WHERE `id` = '$user[id]' LIMIT 1 ");

echo '<script type="text/javascript">
 window.location = "anketa.php"
 </script>';

}

break;
}


if($user["admin"]==0) echo '<div class="menuxa">&#920; Должность: <b>Пользователь</b><br /></div>';
if($user["admin"]==1) echo '<div class="menuxa">&#920; Должность: <font color="Blue"><b>Модер</b></font><br /></div>';
if($user["admin"]==2) echo '<div class="menuxa">&#920; Должность: <font color="OrangeRed"><b>Ст.Модер</b></font><br /></div>';
if($user["admin"]==3) echo '<div class="menuxa">&#920; Должность: <font color="Red"><b>Админ</b></font><br /></div>';
if($user["admin"]==4) echo '<div class="menuxa">&#920; Должность: <font color="DarkViolet"><b>Создатель</b></font><br /></div>';

echo '<div class="menuxa">&#164; Имя: '.$user['name'].'<br />
&#164; Фамилия: '.$user['famil'].'<br />
&#164; Страна: '.$user['strana'].'<br />
&#164; Город: '.$user['gorod'].'<br /></div>

<div class="menuxa">&#248; Рейтинг: '.$user['reit'].'<br /></div>';

if($user["reit"]>0 && $user["reit"]<51)  echo '<div class="menuxa">&#248; Ранг: <b>Новичок</b><br /></div>';

if($user["reit"]>52 && $user["reit"]<151) echo '<div class="menuxa">&#248; Ранг: <b>Продвинутый</b><br /></div>';

if($user["reit"]>152 && $user["reit"]<391)  echo '<div class="menuxa">&#248; Ранг: <b>Наш человек</b><br /></div>';

if($user["reit"]>392 && $user["reit"]<901)  echo '<div class="menuxa">&#248; Ранг: <b>Свой человек</b><br /></div>';


echo '<div class="menuxa">&#164; О себе: '.$user['infos'].'<br /></div>

<div class="menuxa">&#164; Интересы: '.$user['interest'].'<br /></div>


<div class="test"><a href="index.php">На главную</a>
</div>';

echo '</div>';

} 

include_once ('include/foot.php');

?>
