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
			min-width: 274px;
		background-image: url('img\\istockphoto-1046087494-1024x1024.jpg');
        background-position: center;
        background-size:100% 100%;
        background-repeat:no-repeat;   
		}
		.head
		{
			display: flex;
			align-items:baseline;
			padding:2rem;
			background-color: #f8f8f8;

			justify-content: space-around;
			
		}
        .head h1
        {
        	margin:0;
        	font-weight:200;
        	font-family: serif;
        	font-size:2rem;

        }
        .head h1::first-letter
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
			margin:0.7rem;
			text-decoration:none;
			display:block;
			transition-duration:0.4s;
			color:black;
			font-size:1rem;
			padding:0.5rem;
		}
		nav ul a:hover
		{
			background-color:tomato;
			color:white;
			border-radius: 4px;
			
		}
		
		h2
		{

		    font-family:serif;
			animation:flow 10s linear 0s infinite normal; 
		}
		.slideshow img
		{
			animation:fade 1.5s;
			display:none;
		}
		.container
		{
			width:100%;
			display:flex;
			flex-wrap: wrap;
           
          
		}
		.container div
		{
			border:2px solid #ccc;
			text-align: center;
			width:360px;
			margin:2% 3%;
			transition: 0.5s;
	
		}
		.container div:hover
		{
			 border: 2px solid #777;
					
					 box-shadow: 10px 10px 5px black;
		}
        .about
        {
        	width:80%;
        	margin:auto;
        	font-size:1.5rem;
        	padding:2%;
        	background-color: #ccc;
        }

        .about h3
        {
               text-align:center;
        }
		.about:hover
		{
			 border: 2px solid #777;
			  box-shadow: 10px 10px 5px black;


		}
	
		@keyframes fade 
		{
            from {opacity: .4} 
             to {opacity: 1}
        }
		@media screen and (max-width:850px)
		{
			body
			{
				
				background-image:url(''); 
			}
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
			.slideshow img
			{
				width:100%;
				height:auto;
			}
			.container
			{
				flex-direction: column;
				align-items:center;
			}
			.container div
			{
				width:50%
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
					<a href="login.php"><li>LOGIN</li></a>
					<a href="registration.php"><li>REGISTER</li></a>
					<a href="#find"><li>ABOUT</li></a>
				</ul>
			</nav>
		</div>
	</header>
	

		<marquee scrollamount= "15" direction = "left">
		<h2 >WELCOME TO ONLINE PIZZA ORDERING SYSTEM</h2> 
		</marquee> 

		
		
<br><br>
<center>
    <div style="padding:1%;">
		<div class="slideshow" style="width:50%;height:100%; margin:auto; height:auto;">
		<img src="img\slide1.jpg" class="item" width="600px" height="400px" style="border:4px solid black;">
		<img src="img\slide2.jpg"  class="item"  width="600px" height="400px" style="border:4px solid black;">
		<img src="img\slide3.jpg"  class="item" width="600px" height="400px" style="border:4px solid black;">
	    </div>
	</div>
	
  
<br>
    <div class="container" >
    	<div style="background-color:white">
    		<img src="img\image1.jpg" style="width:100%;height:50%;">
    		<h4>Online Pizza Ordering System</h4>
    		<p>An online medical shop evokes the physical analogy of buying products or services at a regular "bricks-and-mortar" retailer or shoping center.</p>
    	</div>
   
    	<div style="background-color:white">
    		<img src="img\image2.jpg" style="width:100%;height:50%;">
    		<h4>Order Management System</h4>
    		<p>Online stores typically enable shoppers to use "search" features to find specific models,brands or items.Online customers must have access.</p>
    	</div>
    
    	<div style="background-color:white">
    		<img src="img\image3.jpg" style="width:100%;height:50%;">
    		<h4>Customer Management System</h4>
    		<p>A typical online store enables the customer to browse the firm's range of products and services,view photos or images of the products.</p>
    	</div>
    </div>

 
  <div class="about" id="find">
		
			<h3>ABOUT ONLINE PIZZA ORDERING SYSTEM</h3>
			<p>online pizza ordering system is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the internet using a web browser.consumers find a product of interest by visting the website of the retailer directly or by searching among alternative vendors using a shopping search engine.which displays the same products avilability and pricing at e-retailers .As of 2019 cutomers can shop online using a range of diffrent computers and devices.Incluing desktop computers,laptops,tablet computer and smartphones</p>
			<p>An online shop evokes the physical analogy of buying products or services at a regular "bricks-and-mortar"retailer or shopping center:the process is called bussiness-to-consumer(B2C) online shopping.</p>
		

</div>
</center>

</body>
</html>
 <script>
   	var slideindex=1,i;
   	showimage();
   	function showimage()
   	{
   	images=document.getElementsByClassName("item");
   	if(slideindex>images.length)
   	{
   		slideindex=1;
   	}
   	for(i=0;i<images.length;i++)
   	{
       images[i].style.display="none";
   	}
   	 	images[slideindex-1].style.display="block";
   	slideindex++;
    setTimeout(showimage,2000);
   }

   </script>