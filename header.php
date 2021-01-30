<!DOCTYPE html>
<html>
<head>
    <?php /*require 'loginsessiontimeout.php'; */?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- This is the ajax to check login session timeout.-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    setTimeout(() => {
        alert("Your Session has expired due to inactivity for more than 1 minute.\nKindly Login Again!!!");
        location.replace('loginsessiontimeout.php');
    }, 60000);
    </script>

    <!----------------------------------------------------->
    <style>
        body
        {
            margin:0;
            padding:0;
            box-sizing: border-box;
            min-width:274px;
        }
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 16px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 12px;
          margin: 4px 2px;
          transition-duration: 0.4s;
          cursor: pointer;
        }
        .button3 {
          background-color: black;
          color: white;
          border: 2px solid #f44336;
        }
        .button3:hover {
          background-color: red;
          color: white;
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
            padding: 20px;
            color:white;
            font-size:2.5rem;
        }
        .container1
        {
            display:flex;
            flex-wrap:wrap;
            width:80%;
            max-width:1400px;
            margin:auto;

        }
        .flex-items
        {
           border:2px solid #ccc;
           text-align:center;
           margin:2% 3%;
            padding:1%;

        }
        .flex-items:hover
        {
             border: 2px solid #777;
              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .flex-items  input
        {
           background-color:white;
           color: black;
           border: 1.5px solid #f44336;
           padding:1.5% 10%;
           border-radius:4px;
           transition-duration:0.4s;
        }
        .flex-items input:hover
        {
            background-color: #f44336;
            color: white;
        }
        @media screen and (max-width:720px)
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
        @media screen and (max-width:1325px)
        {
            .container1
            {
                justify-content: center;
            }
            .flex-items
            {
                flex-grow: 0.5;
            }
        }
    </style>
    <script>
    var x=document.querySelector('nav ul a:nth-child(5)');
    var y=document.querySelectorAll('.dropdown');
    function ok()
    {
         y[0].style.display="block";
          y[1].style.display="block";
    }
    function notok()
    {
        y[0].style.display="none";
          y[1].style.display="none";

    }
</script>
</head>
<body>
    <header>
        <div class="head">
            <div>
                <h1>Online Pizza Ordering System</h1>
            </div>

            <nav>
                <ul>
                    <!--<a href="#"><li>Recommended</li></a>-->
                    <a href="veg.php"><li>VEGPIZZA</li></a>
                    <a href="nonveg.php"><li>NON-VEGPIZZA</li></a>
                    <a href="beverages.php"><li>BEVERAGES</li></a>
                    <a href="pizzam.php"><li>PIZZA MANIA</li></a>
                    <a href="cart.php"><li>CART</li></a>
                    <a href="history.php" class="dropdown">MY ORDER HISTORY</a>
                    <a href="changeprofile.php" class="dropdown">CHANGE PASSWORD</a>
                </ul>
            </nav>
        </div>
    </header>
<div class="name">
    <?php echo $_SESSION['page']; ?>
    <form style="float: right;" action="logout.php" method="POST"><button name="logout" class="button button3">Logout</button></form>
    </div>

    <br><br>
