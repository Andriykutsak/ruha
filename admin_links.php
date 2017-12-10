<?php 	

include_once "config.php";
if (!empty($user)) {
	if ($user['admin']==4) {
				
	if ($_GET['act']=='admins') {
		$query=mysql_query("SELECT * FROM `users` WHERE `admin`=4");
		if (mysql_num_rows($query)<1) {
			echo "<h2 class='text-center'>адміністраторів не знайдено</h2>";
		}
		else{
	?>
<div class="center">
	<h2 class="text-center">список адміністраторів</h2>

	<table>
			<tr>
				<td>id</td>
				<td>імя</td>
				<td>email</td>
				<td>admins</td>
			</tr>
<?php
	
	while ($row=mysql_fetch_array($query)) {
	
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['admin']."</td>";
echo "</tr>";


?>
		
		<?php
	}
	?></table>
		</div><?php
}
}
else if($_GET['act']=='block-user'){
	$query=mysql_query("SELECT * FROM `users` WHERE `izgnali`!=0");
	if (mysql_num_rows($query)<1) {
		echo "<h2 class='text-center'>немаэ заблокованих користувачів</h2>";
	}
	else{
	?>
<table>
			<tr>
				<td>id</td>
				<td>імя</td>
				<td>email</td>
				<td>admins</td>
			</tr>
<?php
	
	while ($row=mysql_fetch_array($query)) {
	
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo"<td>".$row['name']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['admin']."</td>";
echo "</tr>";


?>
		<?php
};
};
}}}

 ?></table>