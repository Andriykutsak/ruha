<?

$ss = mysql_fetch_assoc(mysql_query("SELECT * FROM `site`"));

echo '<div class="foot"><center>'.$ss['copyr'].'</center></div>';

?>