<?php
require 'db_config.php';
if(isset($_POST['adminsubmit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $query="select * from admin where username='$user' and password='$pass'";
    $result=mysqli_query($link,$query);
    if(!$result && $result==NULL)
    {
        echo 'error';
        die();
    }
    $_SESSION['user']=$user;
    echo 'requesing authentication.....';
    echo '<meta http-equiv = "refresh" content = "2; url = adminlogin.php"/>';
}
else if(isset($_POST['deliverysubmit']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $query="select * from delivery where name='$user' and password='$pass'";
    $result=mysqli_query($link,$query);
    if(!$result && $result==NULL)
    {
        echo 'error';
        die();
    }
    $_SESSION['user2']=$user;
    echo 'requesing authentication.....';
    echo '<meta http-equiv = "refresh" content = "2; url = deliveryorders.php"/>';
}
?>
