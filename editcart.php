<?php
require 'db_config.php';
if(isset($_POST['delete']))
{
    $id=$_POST['delete'];
    $query = "delete from cart where id='$id'";
    $result = mysqli_query($link, $query);
    if(!$result)
    {
        die();
    }
    header('location:cart.php');
}
?>
