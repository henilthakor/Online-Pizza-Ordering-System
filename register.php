<?php
require 'db_config.php';
if(isset($_POST['register']))
{
    echo  $user=$_POST['username'];
    echo $pass=$_POST['password'];
    echo $phno=$_POST['phno'];
    echo $email=$_POST['email'];
    echo $address=$_POST['address'];
    echo $wallet=1000;
    echo $id=NULL;
    $query="insert into users values('$user','$pass','$phno','$wallet','$id','$email','$address')";
    $result = mysqli_query($link, $query);
    header("Location:registration.php");
}
?>