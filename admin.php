<?php
include_once ('config.php');

if(!empty($user)){
if($user['admin']==4) {
$all_suers=mysql_num_rows(mysql_query("SELECT *  FROM `users`"));
$admins=mysql_num_rows(mysql_query("SELECT *  FROM `users` WHERE `admin`=4"));
$block_user=mysql_num_rows(mysql_query("SELECT *  FROM `users` WHERE `izgnali`=1"));

?>
<header class="admin-header">
	<div class="center"><ul class="adm-head">
	<li><a href="all-user">загальна кількість користувачів <?php echo $all_suers; ?></a></li>

	<li><a href="admins"> <?php echo $admins; ?> адміністраторів</a></li>
	<li><a href="block-user"><?php echo $block_user; ?> забанених користувачів</a></li>
	<li><a href="login.php?logout=true">Виход</a></li>
	
</ul></div>
</header>
<h2 class="text-center">список всіх користувачів</h2>
<table class="center">
	<tr>
		<td>id</td>
		<td>reff</td>
		<td>URL1</td>
		<td>URL2</td>
		<td>URL3</td>
		<td>URL4</td>
		<td>URL5</td>
		<td>хеш пароля</td>
		<td>Email</td>
		<td>імя</td>
		<td>статус</td>		
		<td>поточний баланс</td>
		<td>admin</td>
		<td>мінімалка</td>
		</tr>
		<form  action="admin_b.php"><?php 
		$adm_Query_all=mysql_query("SELECT * FROM `users`");
		while ($row=mysql_fetch_array($adm_Query_all)) {
			echo "<tr>";

			echo "<td>";
			echo $row['id'];
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['reff']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['url1']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['url2']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['url3']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['url4']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['url5']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['pass']." data-id=".$row['id'].">";			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['email']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['name']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['infos']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['bablo']." data-id=".$row['id'].">";
			echo "</td>";
			echo "<td>";
			echo "<input type='text' value=".$row['admin']." data-id=".$row['id'].">";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value=".$row['minimalka']." data-id=".$row['id'].">";
			echo "</td>";

			echo "</tr>";
		}


		 ?>
			
		</form>
		
</table>
<?php
}
else{
	header('location:index.php');
} 
}
else{
	header('location:index.php');
} 

include_once ('include/foot.php');

?>
