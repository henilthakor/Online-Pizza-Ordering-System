<?php
require 'db_config.php';
if(isset($_POST['checkout']))
{
    $id=NULL;
    $user=$_SESSION['user1'];
    $query="select * from cart where orderedby='$user'";
    $date=date("Y-m-d H:i:s");
    $result=mysqli_query($link, $query);
    $finalstr='';
    while($row=mysqli_fetch_array($result))
    {
        $pizzaid=$row['pizzaid'];
        $quantity=$row['quantity'];
        $combined=$pizzaid.':'.$quantity;
        $finalstr=$finalstr.$combined.',';
    }
    $query1="insert into orders values('$id','$user','$finalstr','$date')";
    $result1 = mysqli_query($link, $query1);
    $query2="insert into history values('$id','$user','$finalstr','$date','$id')";
    $result2 = mysqli_query($link, $query2);
    $query="delete from cart where orderedby='$user'";
    $result = mysqli_query($link, $query);
    $_SESSION['success']="added";
    header("location:cart.php");
}
?>
