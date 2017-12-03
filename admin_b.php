<?php 	

include_once "config.php";
if (!empty($user)) {
	if ($user['admin']==4) {
		$adm_Query_all=mysql_query("SELECT * FROM `users`");
		?>

		<form action="admin_b.php">
			<?php 
while ($row=mysql_fetch_array($adm_Query_all)) {
	echo "<input type='text' placeholder=".$row['id'].">";
	echo "<input type='text' placeholder=".$row['reff'].">";
	echo "<input type='text' placeholder=".$row['name'].">";
}



			 ?>



		</form>
		<?php
	}
}

 ?>