<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){ require 'Logged In dashboard.php';}
else
{
	require 'top.php';
}

 ?>
<h1 style="text-align: center;
  margin: 20% 0;">Welcome to  the online Book Shop</h1>  	


<div>
  <?php require_once "../controller/footer.php" ;?>
</div>
</body>
</html>