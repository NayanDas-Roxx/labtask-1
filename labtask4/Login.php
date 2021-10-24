<!DOCTYPE html>
<html>
<head>
<title>LogIn</title>
</head>
<body>
<style>
.error {color: #FF0000;}
</style>

<?php 
session_start();
if (isset($_SESSION['user_name'])){header("location:Welcome.php");}
else
{
  require 'top.php';
}

$username="NAYAN";
$userpassword="nayan123";

if (isset($_POST['user_name'])) {
	if ($_POST['user_name']==$username && $_POST['password']==$userpassword) {
		$_SESSION['user_name'] = $username;
		header("location:Welcome.php");
  }
	else{
      $msg = "username or password invalid";
    }
  }

?>
 
<div style="margin-left: 35%; margin-top: 10%;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
  <span class="error"><?php
    if (isset($msg)) {
      echo $msg;
    }

   ?>   
   </span>
   <br>

 <fieldset style="width: 400px">

  <legend>LOGIN</legend>

  <label for="user_name">User name :</label>
  <input type="text" id="user_name" name="user_name">
 <!--  <span class="error"> <?php echo $user_nameErr;?></span> -->
  <br><br>

  <label for="password">Password :</label>
  <input type="password" id="password" name="password">
 <!--  <span class="error"> <?php echo $passwordErr;?></span> -->
  <br><br>

  <hr>

  <input type="checkbox" id="remember_me" name="remember_me">
  <label for="remember_me">Remember Me</label><br><br>

  <input type="submit" value="Submit"><a href="Forgot Password.php">Forgot Password?</a>

 </fieldset>
</form> 
</div>	
<?php require 'footer.php';?>
</body>
</html>