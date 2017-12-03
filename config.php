<?
session_start();
include 'include/bd.php';

echo '<title>'.$ss['title'].'</title>';

echo '<meta name="viewport"
 content="width=device-width, initial-scale=1.0">';

echo '<link rel="stylesheet" type="text/css" href="../css/style.css">';

include_once ('include/fnc.php');



if($user["bans"]>0){


$usi = mysql_result(mysql_query("SELECT `bans` FROM `users`  WHERE `id` = '".($user['id'])."'"), 0) - time();

if($usi<=0)
{
mysql_query("UPDATE `users` SET `bans`='0' WHERE `id` = '".($user['id'])."'"); 
}
else
{
echo'<div class="menuxa">';
echo '<center><b>ВЫ ЗАБАНЕНЫ!</b></center>';
echo'</div>';

echo'<div class="menuxa">';
echo 'Конец БАНА через: '.time_autoformat($usi,1).' ';
echo'</div>';
exit;
}

}


if($user["izgnali"]==1){

echo'<div class="menuxa">Ваша Анкета заморожена и НЕ подлежит востановлению!</div>';

echo'<div class="menuxa">Причина: '.$user["iz_gnali"].'</div>';

exit;

}

?>