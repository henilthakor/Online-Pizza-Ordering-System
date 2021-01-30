<?php
require 'db_config.php';
if(isset($_POST['loginSubmit']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query="select * from users where username='$user' and password='$pass'";
	$result = mysqli_query($link, $query);
	$row = mysqli_num_rows($result);
    if($row==0){
        $_SESSION['e']="e";
        echo "<script>alert('invalid details')</script>";
    }
    else if($row==1){
        $rowuser = mysqli_fetch_assoc($result);
		$_SESSION['user1']=$rowuser['username'];
		$_SESSION['page']="veg";
		$_SESSION['email']=$rowuser['email'];
		$_SESSION['pass']=$rowuser['password'];
		$_SESSION['otp'] = rand(1000,9999);
		$_SESSION['cpage']="login";
        header('Location: otp.php');
    }
	else
        echo "<script>alert('invalid details')</script>";
    	$result=mysqli_query($link, $query);

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<?php
	if(isset($_SESSION['otperror']))
	{
		$feed = $_SESSION['otperror'];
		if($feed)
		{
			echo "<script>alert(\"Invalid OTP!!!\\nKindly Login Again.\");</script>";
		}
		$_SESSION['otperror'] = false;
	}
	?>
	<style>
html
{

}
		body
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			min-width:420px;
			background-image:url('img\\pizzaback.jpg');

		}
		.container
		{
			height:100vh;
		   display:flex;
		   justify-content: center;
		   align-items: center;
		}
		.login
		{
		 width:40%;
         text-align:center;
         background-color: rgba(0, 0, 0, 0.5);
         color:white;
         border-radius: 50px;
         padding:3rem;
         position: relative;
		}
		.login:hover
		{
			box-shadow: 0px 4px 25px 1px rgba(255,255,255,1);
		}
		.login input
		{
			width:80%;
			padding:0.5rem;
			border:none;
			margin:0.3rem;
			border-radius: 50px;
		}
		.login form a
		{
			font-size:1.4rem;

			color:white;
			text-decoration: none;
			margin:1rem;

		}
		.login form a:hover
		{
			color:skyblue;
		}
		.login button
		{
			border:none;
			font-size:1rem;
			border-radius:25px;
			padding:0.8rem 2rem;
			margin:1rem;
		}
		.login button:hover
		{
			background-color:skyblue;
			color:white;

		}
		.login i
		{
			font-size:2rem;
			border:3px solid #ccc;
			border-radius:50%;
			padding:1rem;
			position:absolute;
			left:3%;
			top:3%;
		}
		.login i:hover
		{
			color:skyblue;
			box-shadow: 0px 0px 15px 3px rgba(255,255,255,0.75);

		}
		@media screen and (max-width:850px)
		{
			.login
			{
				width:75%;

			}
		}
	</style>
</head>
<body>
	<div class="container">
	<div class="login">
	<a href="index.php"><i style="color:white;" class="fas fa-home"></i></a>
		<form method="POST" action="login.php">
			<h1>Login</h1>
			<input type="text" name="username" placeholder="USERNAME" required><br>
			<input type="password" name="password" placeholder="PASSWORD" required><br>
			<a href="registration.php">New User</a><br>
			<a href="deliveryboylogin.php">Login for delivery employees</a><br>
			<button type="submit" name="loginSubmit">Login</button>
		</form>
	</div>
</div>
</body>
</html>
