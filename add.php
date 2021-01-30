<?php require 'adminheader.php'?>
<style type="text/css">
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
		<form action="editpizza.php" method="POST" enctype="multipart/form-data">
		<h3>Add Pizza</h3>
        <input name="name" type="text" placeholder=" Pizza Name">	<br>
        <input name="price" type="number" placeholder=" price">	<br>
        Image:
        <input name="fileToUpload" id="fileToUpload" type="file">
        <select name="type">
        <option value="veg">veg</option>
        <option value="nonveg">NonVeg</option>
        <option value="pizzamania">PizzaMania</option>
        <option value="beverages">Beverages</option>
        </select>
        <input type="submit" value="addpizza" name="addpizza" style="width:40%;color:white;background-color:tomato;border:none;">
        </form>
     </div>
	</div>
</body>
</html>
