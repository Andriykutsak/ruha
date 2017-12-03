<?php
include_once ('config.php');

if(!empty($user)){

echo '<div class="head"><center>Смена Аватарки</center></div>';
echo '<div class="kabi"><center><a href="kabik.php">Личный Кабинет</a></center></div>';




/* Если нажали загрузить аватар*/
if(isset($_REQUEST['submit'])) {

$maxsize = 2; // Максимальный размер файла,в мегабайтах 
$size = $_FILES['filename']['size']; // Вес файла

/* Если не выбрали файл */
if(!@file_exists($_FILES['filename']['tmp_name'])) {
echo '<div class="menuxa"><center><b>Вы не выбрали файл!</b></center></div>';
include_once ('include/foot.php');
exit();
}

/* Максимальный размер 1мб */
if ($size > (1048576 * $maxsize)) {
echo '<div class="menuxa"><center><b>Максимальный размер файла '.$maxsize.'мб!</b></center></div>';
include_once ('include/foot.php');
exit();
}

/* Тип файлов которые можно загружать */
$filetype = array ( 'jpg', 'gif', 'png', 'jpeg', 'bmp' ); 
$upfiletype = substr($_FILES['filename']['name'],  strrpos( $_FILES['filename']['name'], ".")+1); 
  
/* Если тип файла не подходит */
if(!in_array($upfiletype,$filetype)) {
echo '<div class="menuxa"><center><b>К загрузке разрешены файлы форматом JPG,GIF,PNG,JPEG,BMP!</b></center></div>';
include_once ('include/foot.php');
exit();
}

/* Если все окей,заливаем файл в папу и делаем запрос */
$files = 'files_'.rand(1234,5678).'_'.rand(1234,5678).'_'.$_FILES['filename']['name']; 

/* Заливаем */
move_uploaded_file($_FILES['filename']['tmp_name'], "avatars/".$files.""); 

/* Делаем запрос */
mysql_query("UPDATE `users` SET `avatar`='".$files."' WHERE `id`='".$user['id']."' limit 1");
header('Location: ava.php');
exit();
}

//--Удаление авки--//
if(isset($_REQUEST['delava'])) {
mysql_query("UPDATE `users` SET `avatar` = '' WHERE `id` = '".$user['id']."'");

unlink("avatars/".$user['avatar']."");

header('Location: ava.php');
exit();
}

echo '<div class="menuxa">К загрузке допускаются фотографии форматом <b>JPG,GIF,PNG,JPEG,BMP</b>
<br />После смены аватара в анкете будет выводится фотография размером <b>210x210</b></div><div class="menuxa">';  
  
echo (empty($user['avatar'])?'<img src="../avatars/notnull.png" alt="*" style="max-width: 210px; max-height: 210px;">':'<img src="../avatars/'.$user['avatar'].'" alt="*" style="max-width: 210px; max-height: 210px;"><br />[<a href="ava.php?delava">Удалить аватар</a>]');

echo '</div><div class="menuxa"><form action="" method="post" enctype="multipart/form-data"> 
Выберите файл:<br><input type="file" name="filename"/><br>   
<input type="submit" value="Загрузить" name="submit"/> 
</form></div>';


echo '</div>';

echo '<div class="test"><a href="index.php">На главную</a>
</div>';


}

include_once ('include/foot.php');

?>
