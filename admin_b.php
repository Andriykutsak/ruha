<?php 	

include_once "config.php";
if (!empty($user)) {
	if ($user['admin']==4) {
			$id=$_GET['id'];
	$values=$_GET['value'];
	$row=$_GET['row'];
				
echo $id." ".$values." ".$row;

		if (isset($id) AND isset($values) AND isset($row)) {
			function clean($val="value"){
				$value=trim($val);
				$value=htmlspecialchars($val);
				$value=mysql_escape_string($val);
				return $value;
			}
			
			$query=mysql_query("UPDATE `users` SET `".clean($row)."` = '".clean($values)."' WHERE `users`.`id`=".clean($id)."");
			echo "completate";
		}

		
		
	
	if ($_GET['act']=='admins') {
	?><table>
			<tr>
				<td>id</td>
				<td>імя</td>
				<td>email</td>
				<td>admins</td>
			</tr>
<?php
	$query=mysql_query("SELECT * FROM `users` WHERE `admin`=4");
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
}}
}

 ?></table>