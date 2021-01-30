<?php require 'adminheader.php'?>
<style>
		.container
        {
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	height:70vh;
        }
</style>
</head>
	<div class="container">
		<div class="login">
		<form action="editdeliveryboy.php" method="POST" onsubmit="return matchpassword()">
		  <h1>Add Delivery Boy</h1>
         <input type="text" name="username" placeholder=" Name" required>	<br>
         <input type="password" name="password" placeholder=" password" required><br>
         <input type="password" name="password2" placeholder=" Confirmpassword" required>
         <input type="text" name="phno" placeholder="phone number" required pattern="[0-9]{10}" required><br>
            <input type="email" name="email" placeholder="enter email" required><br>
			<input type="text" name="address" placeholder="enter address address" required><br>
			<button type="reset">Reset</button>
			<button name="adddelivery" type="submit">Register</button>
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
