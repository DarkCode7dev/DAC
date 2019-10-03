<!DOCTYPE html>
<html>
<head>
	<title>Input</title>
</head>
<body>
	<form method="post" action="Data.php">
		<label>Name</label>
		<input type="text" name="nam" placeholder="bitches"><br>
		<label>MobNo</label>
		<input type="text" name="mobi" placeholder=" tgttt"><br>
		<input type="submit" name="submit">
	</form>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$na=$_POST['nam'];
	$mob=$_POST['mobi'];
	echo "Contact Mr ".$na." on ".$mob;
}
?>