<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			min-width:274px;
			font-size:1.3rem;
		}
		.head
		{
			display: flex;
			align-items:baseline;
			justify-content:space-around;
			padding:2rem;
			background-color:#f8f8f8;
		}
        .head h1
        {
        	margin:0;
        	font-weight: 200;
        	font-family: serif;
        	font-size:2rem;
        }
		nav ul
		{
			list-style-type:none;
			padding:0;
			margin:0;
			display: flex;

		}
		nav ul a
		{
			margin-left:0.7rem;
			text-decoration:none;
			display:block;
			transition-duration:0.4s;
			color:black;
			font-size:0.8rem;
			padding:0.3rem;
		}
		nav ul a:hover
		{
			background-color:tomato;
			color:white;
			border-radius: 4px;

		}
		.name
		{
			background-color:tomato;
			text-align:center;
			color:white;
			font-size:2.5rem;
		}
		.container
		{
			display:flex;
			flex-wrap: wrap;
			justify-content: center;
		}
		.container img
		{
			margin:1rem;
		}
		table td input,select
		{
			width:100%;
		}

		@media screen and (max-width:850px)
		{
			.head
			{
				flex-direction:column;
				align-items: center;
			}
			.head h1
			{
				margin-bottom: 1rem;
				text-align:center;
			}
			nav ul
			{
				flex-direction: column;
				text-align:center;


			}
			 form table
			{
				width:90%;
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

			<nav>
				<ul>
					<a href="veg.php"><li>VEGPIZZA</li></a>
					<a href="nonveg.php"><li>NON-VEGPIZZA</li></a>
					<a href="beverages.php"><li>BEVERAGES</li></a>
					<a href="pizzam.php"><li>PIZZA MANIA</li></a>
					<a href="cart.php"><li>CART</li></a>
					<form action="logout.php" method="POST"><button name="logout" id="logout"><li>Logout</li></button></form>
				</ul>
			</nav>

		</div>
	</header>
	<br><br>
	<div class="name">
		MAKE ONLINE PAYMENT
	</div>
	<br><br>
	<div class="container">
		<div>
			<img src="img\master.png" style="width:150px;height:140px;">
		</div>
		<div>
			<img src="img\maestro.png" style="width:150px;height:140px;">
		</div>
		<div>
			<img src="img\visa.png" style="width:150px;height:140px;">
		</div>
	</div>
	<form method="POST" action="checkout.php" >
		<table style="margin:auto;width:40%">
			<tr>
				<td>Card Holder Name:</td>
				<td><input type="text"></td>

			</tr>
			<tr>
				<td >Card No:</td>
				<td><input type="text"></td>

			</tr>
			<tr>
				<td> Card Type:</td>
				<td><select>
    <option >Master</option>
    <option >Visa</option>
    <option >Maestro</option>
  </select></td>

			</tr>
			<tr>
				<td> Card Expiry:</td>
				<td><input type="month"></td>

			</tr>
			<tr>
				<td>Amount:</td>
				<td><input type="text" value="<?php echo $_POST['checkout'];?>" readonly></td>

			</tr>
			<tr>
				<td></td>
				<td>
						<button type="submit" value="checkout" name="checkout">Make payment</button>
				</td>
			</tr>
		</table>






	</form>
</body>
</html>
