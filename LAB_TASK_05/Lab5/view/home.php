<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1>Welcome home! <?=$_SESSION['user']['username']?> </h1>
	<a href="../controller/logout.php">logout</a> <br>
	<a href="viewProfile.php">view Profile</a>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>