<?php
include_once ('config.php');

if(!empty($user)){
if($user['admin']==4) {
$all_suers=mysql_num_rows(mysql_query("SELECT *  FROM `users`"));
$admins=mysql_num_rows(mysql_query("SELECT *  FROM `users` WHERE `admin`=4"));
$block_user=mysql_num_rows(mysql_query("SELECT *  FROM `users` WHERE `izgnali`=1"));

?>
	<div class="message-wrap">
					<div class="done">
						<p>Данні успішно відправлені на сервер та внесені в базу данних</p>
					</div>
					<div class="fail">
						<p> під час виконаня запиту сталася помилка, данні не внесені в базу данних будьласка перевірте своє підключення до інтернету та спробуйте пізніше</p>
					</div>
				</div>	
<header class="admin-header">
	<div class="center"><ul class="adm-head">
	<li><a href="#">загальна кількість користувачів <?php echo $all_suers; ?></a></li>

	<li><a href="admin_links.php?act=admins"> <?php echo $admins; ?> адміністраторів</a></li>
	<li><a href="admin_links.php?act=block-user"><?php echo $block_user; ?> забанених користувачів</a></li>
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
			echo "<input type='text' value='".$row['reff']."' data-id='".$row['id']."'data-name='reff'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['url1']."' data-id='".$row['id']."'data-name='url1'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['url2']."' data-id='".$row['id']."' data-name='url2'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['url3']."' data-id=".$row['id']." data-name='url3'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['url4']."' data-id=".$row['id']." data-name='url4'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['url5']."' data-id=".$row['id']." data-name='url5'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['pass']."' data-id=".$row['id']." data-name='pass'>";			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['email']."' data-id=".$row['id']." data-name='email'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['name']."' data-id=".$row['id']." data-name='name'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['infos']."' data-id=".$row['id']." data-name='infos'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['bablo']."' data-id=".$row['id']." data-name='bablo'>";
			echo "</td>";
			echo "<td>";
			echo "<input type='text' value='".$row['admin']."' data-id='".$row['id']."' data-name='admin'>";
			echo "</td>";

			echo "<td>";
			echo "<input type='text' value='".$row['minimalka']."' data-id='".$row['id']."' data-name='minimalka'>";
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
echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>";
echo"<script>$(document).ready(function() {
	$('input').on('blur', function(event) {
		event.preventDefault();
		var a=$(this).data('id');
		var val=$(this).val();
		var rowName=$(this).data('name');
		console.log(rowName); 
		$.ajax({
			url: 'admin_b.php',
			type: 'GET',
			data: {id: a, value: val,row: rowName},
		})
		.done(function() {
			$('.message-wrap').show();
			$('.done').show();
		})
		.fail(function() {
			$('.message-wrap').show();
			$('.fail').show();
		})
		.always(function() {
			setTimeout(function(){
				$('.message-wrap').hide();
				$('.fail').hide();
				$('.done').hide();
			},1000)
		});
		
	});
});</script>";

?>
