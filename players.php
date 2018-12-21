<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="get">
	<label>Username:</label>
	<input type="text" name="user">
	<button type="submit">Ok</button>	
</form>

<img src="userimage?user=<?php error_reporting(0); echo $_GET['user'] ?>">

</body>
</html>