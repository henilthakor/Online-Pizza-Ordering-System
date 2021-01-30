<?php require 'adminheader.php'?>
<style type="text/css">
        .container
        {
            overflow-x: auto;
        }
        </style>
</head>

		<div class="container">
			<table class="table">
				<tr>
					<td>Product Name</td>
					<td>Image</td>
					<td>Cost</td>
					<td> ProductType</td>
					<td>Delete</td>
				</tr>
				<?php
				$query='select * from pizza';
				$result=mysqli_query($link,$query);
				$count=0;
				while($row=mysqli_fetch_array($result))
				{
				?>
				<tr style="height:30%;">
					<td><?php echo $row['name']?></td>
					<td><img src="<?php echo $row['src']?>" alt="img not found" style="height:30%;"></td>
					<td><?php echo $row['price']?></td>
					<td><?php echo $row['type']?></td>
					<td><form action="editpizza.php" method="POST"><input value="<?php echo $row['id']?>" name="delete[]" type="checkbox"></td>
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
		<button type="submit" value="delete" name="deletepizza">Delete</button>
	</form>
	<br>

     </div>



</body>
</html>
