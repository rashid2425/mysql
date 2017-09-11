<?php 
	if ($_GET['key'] != md5('uuu333')) 
	{
		header ('location: login.php');
		exit();
	}

	if(!empty($_POST)){
		$con = mysqli_connect('localhost', 'id2455008_alhaya', 'Rashid24', 'id2455008_test1');
		$new_rate = $_POST['rate'];
		mysqli_query($con, "UPDATE rates SET value='$new_rate' WHERE name='USD'");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>наш сайт</title>
</head>
<body>
	Изменить курс доллара:
	<form action="" method="post">
		<input type="text" name="rate"><br>
		<input type="submit" value="сохранить">
	</form>
</body>
</html>
