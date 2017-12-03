<?php
include_once ('config.php');

if(!empty($user)){
if($user['admin']==4){ 

$zz=htmlspecialchars(trim($_GET['zz']));
switch($zz){

 case 'ne':
 
echo '<div class="head"><center>Админ-Новости</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';

$text = trim($_POST['text']);

$news_c = mysql_result(mysql_query("SELECT COUNT(*) FROM `news`"), 0); 
 if($news_c == '0') { 
                                        echo '<div class="menuxa"><b>Новостей еще нету :(</b></div>'; 
                                        }

                                 
                                        

echo '<div class="menuxa">';

$result=mysql_query("SELECT * FROM `news`");




while($mewad=mysql_fetch_array($result))

{ 

 echo '<div class="menuxa">';
echo '<b><p>№'.$mewad['id'].'. Новость:</p></b></div>';
 echo '<div class="menuxa"><p> <b>'.htmlspecialchars($mewad['name']).'</b>: '.smile(htmlspecialchars($mewad['text'])).'<br /></p></div><br />';

} 

echo '</br>';

echo '</div>';


echo '<div class="menuxa">';	



echo '<center><form action="admin_b.php?zz=ne" method="post">


Новость: [<a href="admin_b.php?zz=ne">Обновить</a>]: </br>

<p><textarea maxlength="300" cols="40" rows="8" name="text"></textarea></p></br>';

echo '<input type="submit" value="Сохранить" /></p>
</form></center></br>';



echo '<center><form action="admin_b.php?zz=ne" method="post">
Удалить новость№(ID): </br>

<p><textarea maxlength="10" cols="1" rows="1" name="id"></textarea></p></br>';

echo '<input type="submit" value="Удалить" /></p>
</form></center>';

if(isset($_POST['id'])){
mysql_query("delete from `news` where (`id` = '".$_POST['id']."')");
echo '<script type="text/javascript">
 window.location = "admin_b.php?zz=ne"
 </script>';
}



$text = mysql_real_escape_string(htmlspecialchars($_POST['text'])); 

if(!empty($_POST['text'])){

mysql_query("INSERT INTO `news` SET `text` = '".$text."', `name` = '".mysql_real_escape_string($user['login'])."' ");

echo '<script type="text/javascript">
 window.location = "admin_b.php?zz=ne"
 </script>';
}


echo '</div>';


echo '
<div class="test"><a href="index.php">На главную</a>
</div>';

break;

case 'copyr':

$result=mysql_query("SELECT * FROM `site`");

while($copyr=mysql_fetch_array($result))

{ 

 echo '<div class="menuxa">';
echo '<b><p>Текущий копирайт: <b>'.$copyr['copyr'].'</b></p></b></div>';
} 


echo '<div class="menuxa">';
echo '<center><form action="admin_b.php?zz=copyr" method="post">


Копирайт: [<a href="admin_b.php?zz=copyr">Обновить</a>]: </br>

<p><textarea maxlength="20" cols="40" rows="4" name="copyr"></textarea></p></br>';

echo '<input type="submit" value="Сохранить" /></p>
</form></center></div>';


$copyr = mysql_real_escape_string(htmlspecialchars($_POST['copyr'])); 


if(isset($_POST['copyr'])){

mysql_query("UPDATE `site` SET `copyr` = '".$copyr."' ");

echo '<script type="text/javascript">
 window.location = "admin_b.php?zz=copyr"
 </script>';

}

echo '
<div class="test"><a href="index.php">На главную</a>
</div>';

break;

case 'title':



$result=mysql_query("SELECT * FROM `site`");

while($copyr=mysql_fetch_array($result))

{ 

 echo '<div class="menuxa">';
echo '<b><p>Текущий заголовок: <b>'.$copyr['title'].'</b></p></b></div>';
} 


echo '<div class="menuxa">';
echo '<center><form action="admin_b.php?zz=title" method="post">


Заголовок: [<a href="admin_b.php?zz=title">Обновить</a>]: </br>

<p><textarea maxlength="20" cols="40" rows="4" name="title"></textarea></p></br>';

echo '<input type="submit" value="Сохранить" /></p>
</form></center></div>';


$title = mysql_real_escape_string(htmlspecialchars($_POST['title'])); 


if(isset($_POST['title'])){

mysql_query("UPDATE `site` SET `title` = '".$title."' ");

echo '<script type="text/javascript">
 window.location = "admin_b.php?zz=title"
 </script>';

}

echo '
<div class="test"><a href="index.php">На главную</a>
</div>';




break;

case 'kosh':

$lll=mysql_query("SELECT * FROM `site`");

while($kosh=mysql_fetch_array($lll))

{ 

 echo '<div class="menuxa">';
echo '<b><p>Текущий WMR кош: <b>'.$kosh['kosh'].'</b></p></b></div>';
} 


echo '<div class="menuxa">';
echo '<center><form action="admin_b.php?zz=kosh" method="post">


Копирайт: [<a href="admin_b.php?zz=kosh">Обновить</a>]: </br>

<p><textarea maxlength="20" cols="40" rows="4" name="kosh"></textarea></p></br>';

echo '<input type="submit" value="Сохранить" /></p>
</form></center></div>';


$kosh = mysql_real_escape_string(htmlspecialchars($_POST['kosh'])); 


if(isset($_POST['kosh'])){

mysql_query("UPDATE `site` SET `kosh` = '".$kosh."' ");

echo '<script type="text/javascript">
 window.location = "admin_b.php?zz=kosh"
 </script>';

}

echo '
<div class="test"><a href="index.php">На главную</a>
</div>';

break;





}
}
}


include_once ('include/foot.php');

?>

