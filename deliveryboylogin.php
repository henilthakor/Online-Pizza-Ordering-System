
<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<style>
		body
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			min-width:274px;
			background-image: url('img/unnamed.jpg');
			background-size: 100vw 100vh;
		}
		.head
		{
			display: flex;
			align-items:baseline;
			justify-content:space-around;
			padding:2rem;
			color:white;
		}
        .head h1
        {
        	margin:0;
        	font-weight: 200;
        	font-family: serif;
        	font-size:2rem;
        	text-align: center;
        }
        .head h1:first-letter
        {
        	color:red;
        }
        .container
        {
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	height:70vh;
        }
        .login
        {
        	text-align: center;
        	width:30%;
        	padding:2.5rem 1rem;
        	border-radius: 15px;
        	background-color:rgba(255, 255, 255, 0.8);

        }
        .login input
        {
        	width:80%;
        	margin-top:1rem;
        	border-radius: 15px;
        	font-size:1.3rem;

        }

         .login input[type="submit"]
         {
         	padding:0.5rem;
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
	<header>
		<div class="head">
			<div>
				<h1>Online Pizza Ordering System</h1>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="login">
		<h1>Delivery Boy Login</h1>
		<form action="logincheck.php" method="POST">
         <input type="text" name="username" placeholder=" Username" required>	<br>
         <input type="password" name="password" placeholder=" Password" required>
         <input type="submit" name="deliverysubmit" value="Login" style="width:40%;color:white;background-color:tomato;border:none;">
         </form>
     </div>
	</div>
</body>
</html>
