<?php
require "db_config.php";
if(isset($_POST['submit']))
{
    $id=NULL;
    $user=$_SESSION['user1'];
    $pizzaid=$_POST['submit'];
    $quantity=$_POST['quantity'];
    $date=date("Y-m-d H:i:s");
    $query = "insert into cart values('$id','$user','$pizzaid','$quantity','$date')";
    $result = mysqli_query($link, $query);
    $_SESSION['success']="added";
    if($_SESSION['page']=="Veg Pizza")
    {
        header('location:veg.php');
    }
    else if($_SESSION['page']=="Nonveg Pizza")
    {
        header('location:nonveg.php');
    }
    else if($_SESSION['page']=="Beverages")
    {
        header('location:beverages.php');
    }
    else
    {
        header('location:pizzam.php');
    }
}
?>
