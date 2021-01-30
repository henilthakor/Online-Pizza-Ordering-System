<?php require 'db_config.php';
if(!isset($_SESSION['user']))
{
    header('location:adminlogin.php');
}
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
            background-size: cover;
            font-size: 1.5rem;

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
            color:black;
            font-size:1.2rem;
            padding:0.4rem;
            background-color: white;
        }
        nav ul a:hover
        {
            background-color:tomato;
            color:white;
            border-radius: 4px;

        }
        .login
        {
            text-align: center;
            width:30%;
            padding:2.5rem 1rem;
            border-radius: 15px;
            background-color:rgba(255, 255, 255, 0.9);

        }
        .login input[type="text"],select,input[type="number"],input[type="password"],input[type="email"]
        {
            width:80%;
            padding: 3px;
            margin-bottom:1rem;
            border-radius: 15px;
            font-size:1.3rem;

        }
        .login input[type="file"]
        {
            margin-bottom: 1rem;
        }

         .login input[type="submit"]
         {
            border-radius: 30px;
            padding:0.5rem;
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
            .login
            {
                width:75%;

            }
        }
        .table
        {
            width:75%;
            margin:auto;
            border-collapse: collapse;
            text-align: center;
        }
        .table tr:nth-child(odd)
        {
            background-color: white;
        }
        .table tr:first-child
        {
            background-color: tomato;
            color:white;
        }
        .table tr:nth-child(even)
        {
            background-color: #f8f8f8;
        }
        .last
        {
            width:80%;
            margin:auto;
            text-align: center;
        }
        .last button
        {
            color:white;
            background-color:tomato;
            border:none;
            border-radius: 15px;
            padding: 0.7rem 0.6rem ;
            font-size: 1.5rem;
        }
</style>
<body>
    <div class="head">
            <div>
                <h1>Online Pizza Ordering System</h1>
            </div>
            <nav>
                <ul>
                    <a href="add.php"><li>Add Pizza</li></a>
                    <a href="delete.php"><li>Delete Pizza</li></a>
                    <a href="adddeliveryboy.php"><li>Add delivery boy</li></a>
                    <a href="deletedeliveryboy.php"><li>Delete delivery boy</li></a>
                    <a href="#"><form method="POST" action="logout.php"><li><input type="submit" name="logout" value="logout"></li></form></a>
                </ul>
            </nav>
        </div>
