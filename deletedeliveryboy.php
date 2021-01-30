<?php require 'adminheader.php'?>
     <style>
		.conatiner
		{
			overflow-x: auto;
		}
		td
		{
			padding: 15px;
		}
	    </style>
</head>
<div class="container">
			<table class="table">
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Phonenumber</td>
					<td>Remove</td>
				</tr>
				<?php
				$query='select * from delivery';
				$result=mysqli_query($link,$query);
				$count=0;
				while($row=mysqli_fetch_array($result))
				{
				?>
				<tr>
					<td><?php echo $row['name']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['phno']?></td>
					<td><form action="editdeliveryboy.php" method="POST"><input value="<?php echo $row['id']?>" name="delete[]" type="checkbox"></td>
				</tr>
				<?php
				$count++;
				}
				if($count==0)
				{
					echo '
					<tr><td style="padding:20px;" colspan="5">
						No data to display
					</td></tr>
					';
				}
				?>
			</table>
			<br><br>
     <div class="last">
		<button type="submit" value="delete" name="deletedelivery">Delete</button>
	</form>
	<br>

     </div>



</body>
</html>
