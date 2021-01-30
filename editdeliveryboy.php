<?php
require 'db_config.php';
if(isset($_POST['adddelivery']))
{
    $id=NULL;
    $name=$_POST['username'];
    $pass=$_POST['password'];
    $phno=$_POST['phno'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $query="insert into delivery values('$id','$name','$pass','$phno','$email','$address')";
    echo $query;
    $result=mysqli_query($link,$query);
    header('location:adddeliveryboy.php');
}
else if(isset($_POST['deletedelivery']))
{
    $id=$_POST['delete'];
    print_r($id);
    foreach($id as $item)
    {
        $query="delete from delivery where id='$item'";
        echo $query;
        $result=mysqli_query($link,$query);
        if(!$result)
        {
            echo 'error';
            die();
        }
    }
    $_SESSION['success']='added';
    header('location:deletedeliveryboy.php');
}
?>
