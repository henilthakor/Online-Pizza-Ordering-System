<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
		.login button
		{
			border:none;
			font-size:1rem;
			border-radius:25px;
			padding:0.8rem 2rem;
			margin:2rem 3rem 0.5rem 4rem;
			
		}
		.login button:hover
		{
			background-color:skyblue;
			color:white;

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
		<form action="register.php" method="POST" onsubmit="return matchpassword()">
			<a href="index.php"><i style="color:white;" class="fas fa-home"></i></a>
			<h1 style="text-align: center">Registration</h1>
			<input type="text" name="username" placeholder="USERNAME" required pattern="^[a-z0-9_-]{3,16}$"><br>
			<input type="password" name="password" placeholder="PASSWORD" required><br>
			<input type="password"name="password2" placeholder="CONFIRMPASSWORD" required><br>
			<input type="text" name="phno" placeholder="PHONENUMBER" required pattern="[0-9]{10}"><br>
            <input type="email" name="email" placeholder="EMAIL" required><br>
			<input type="text" name="address" placeholder="ADDRESS" required><br>
			<button type="reset">Reset</button>
			<button name="register" type="submit">Register</button>
		</form>
	</div>
</div>
</body>
</html>
<script>

 function matchpassword()
{
	var firstpassword=document.forms[0].querySelector('input[name="password"]').value;
	var secondpassword=document.forms[0].querySelector('input[name="password2"]').value;
	if(firstpassword==secondpassword)
	{
		return true;
	}
	else
	{alert('PASSWORD and CONFIRMPASSWORD must match');
		return false;
		
	}
}
</script>