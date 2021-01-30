<?php
require 'db_config.php';
if(!isset($_POST['user2']))
{
	header('deliveryboylogin.php');
}
$query='select * from delivery';
$result=mysqli_query($link,$query);
$numberofboys=mysqli_num_rows ($result);
?>
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
			background-image: url('img/unnamed.jpg');
			background-size: 100vw 100vh;

		}
		.head
		{
		    color:white;
			display: flex;
			align-items:center;
			padding:2rem;
			flex-direction: column;


		}
        .head h1
        {
        	margin:0;
        	font-weight: 200;
        	font-family: serif;
        	font-size:2rem;
        	margin-bottom: 0.7rem;
        }
        .head h1:first-letter
        {
        	color:red;
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
	        color:white;
    		font-size:0.8rem;
			padding:0.3rem;
		}
		nav ul a:hover
		{
			background-color:tomato;
			color:white;
			border-radius: 4px;

		}
		.tabcontainer
		{
			overflow-x:auto;
		}
		.tab
		{
			width:80%;
			text-align: center;
			margin:auto;
			border-collapse: collapse;
			border-width: 1px;
			border-color: white;
			border-style: solid;

		}
		.tab tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
		.tab tr:nth-child(odd)
		{
			background-color: #ffffff;
		}
		.tab tr:first-child,th
		{
			color:white;
			padding:0.5rem;
           background-color: tomato;

		}
		.buttondiv
		{
			text-align: center;
		}
		button
		{
           background-color:tomato;
           border:none;
           border-radius:15px;
           color:white;
           padding:0.5rem;
		}
		button:first-child
		{
			background-color:lightgreen;
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

		}
		td,th
		{
			border-width: 0.1rem;
			border-color: white;
			border-style: solid;
		}
		td,th
		{
			font-size: 1.2rem;
			padding: 0.9rem;
		}
		.container {
		  display: block;
		  margin-left: 60px;
		  position: relative;
		  padding-left: 35px;
		  margin-bottom: 12px;
		  cursor: pointer;
		  font-size: 22px;
		  -webkit-user-select: none;
		  -moz-user-select: none;
		  -ms-user-select: none;
		  user-select: none;
		}
		.container input {
		  position: absolute;
		  opacity: 0;
		  cursor: pointer;
		  height: 0;
		  width: 0;
		}
		.checkmark {
		  position: absolute;
		  top: 0;
		  left: 0;
		  height: 25px;
		  width: 25px;
		  background-color: #eee;
		}
		.container:hover input ~ .checkmark {
		  background-color: #ccc;
		}
		.container input:checked ~ .checkmark {
		  background-color: black;
		}
		.checkmark:after {
		  content: "";
		  position: absolute;
		  display: none;
		}
		.container input:checked ~ .checkmark:after {
		  display: block;
		}
		.container .checkmark:after {
		  left: 9px;
		  top: 5px;
		  width: 5px;
		  height: 10px;
		  border: solid white;
		  border-width: 0 3px 3px 0;
		  -webkit-transform: rotate(45deg);
		  -ms-transform: rotate(45deg);
		  transform: rotate(45deg);
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

	<div class="tabcontainer">
	<table class="tab">
		<tr>
			<th rowspan="2">CustomerName</th>
			<th colspan="5">OrderDetails</th>
			<th><form action="logout.php" method="POST"><button name="logout" style="background-color: black;" value="logout">Logout</button></form></th>
		</tr>
		<tr>
			<th>Image</th>
			<th>ProductName</th>
			<th>CostperUnit</th>
			<th>Quantity</th>
			<th>TotalCost</th>
			<th>Accept/Reject</th>
		</tr>
		<?php
		$query="select * from orders";
		$result=mysqli_query($link,$query);
		while($row=mysqli_fetch_array($result))
		{
		?>
		<tr>
			<?php
				$orders=explode(',',$row['finalorder']);
				array_pop($orders);
				$length=count($orders);
				$order=explode(":",$orders[count($orders)-1]);
				array_pop($orders);
			?>
			<td style="background-color: tomato;color: white;" rowspan="<?php echo $length?>"><?php echo $row['orderedby']?></td>
			<?php
				$query1="select * from pizza where id='$order[0]'";
				$result1=mysqli_query($link,$query1);
				$row1=mysqli_fetch_array($result1);
			?>
			<td><img src="<?php echo $row1['src']?>" alt="img not found" style="width:20%;"></td>
			<td><?php echo $row1['name'];?></td>
			<td><?php echo $row1['price'];?></td>
			<td><?php echo $order[1];?></td>
			<td><?php echo $row1['price']*$order[1];?></td><form action="editdeliverys.php" method="POST">
			<td style="background-color: tomato;" rowspan="<?php echo $length?>"><label class="container"><input value="<?php echo $row['id'];?>" name="orders[[]" type="checkbox"><span class="checkmark"></span></label></td>

		</tr>
		<?php
		foreach ($orders as $x)
		{
			$order=explode(":",$x);
			$query1="select * from pizza where id='$order[0]'";
			$result1=mysqli_query($link,$query1);
			$row1=mysqli_fetch_array($result1);
		?>
		<tr>
			<td><img src="<?php echo $row1['src']?>" alt="img not found" style="width:20%;"></td>
			<td><?php echo $row1['name'];?></td>
			<td><?php echo $row1['price'];?></td>
			<td><?php echo $order[1];?></td>
			<td><?php echo $row1['price']*$order[1];?></td>
		</tr>
		<?php
		}
		?>
		<?php
		}
		?>
    </div>
	</table>
	<br><br>
	<div class="buttondiv">
	<button value="accept" type="submit" name="accept">Accept</button>
	<button value="reject" type="submit" name="reject">Reject</button>
	</form>
	</div>


</body>
</html>
