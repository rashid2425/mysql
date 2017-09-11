<?php 
	
	
	$con = mysqli_connect('localhost', 'id2455008_alhaya', 'Rashid24', 'id2455008_test1');
	// mysql_select_db('id2455008_test1');

	$result = mysqli_query($con, "SELECT * FROM rates WHERE name='USD'");
	$row = mysqli_fetch_assoc($result);
	$rate = $row['value'];

	if (isset($_POST['bucks']))
		$bucks = $_POST['bucks'];
	else
		$bucks = 0;
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="bucks" value="<?php echo $bucks;?>" size="5" />
		<input type="submit" value="=" /> <?php echo $rate * $bucks;?> руб.
	</form>
	
</body>
</html>
