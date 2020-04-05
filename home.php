<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<a class="float-right" href="logout.php">LOGOUT</a>
<h1> Welcome <?php echo $_SESSION['email']; ?> </h1>
</div>
</body>
</html>