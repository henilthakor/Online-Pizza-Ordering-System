<?php
require 'db_config.php';
if(isset($_POST['accept']) && isset($_POST['orders']))
{
    $orders=$_POST['orders'];
    foreach ($orders as $id) {
        $query="update history set status=1 where id='$id'";
        $result=mysqli_query($link,$query);
        $query="delete from orders where id='$id'";
        $result=mysqli_query($link,$query);
        echo "accepted";
        if(!$result)
        {
            echo 'error';
            die();
        }
        $_SESSION['success']='accepted';
        header('location:deliveryorders.php');
    }
}
else if(isset($_POST['reject']) && isset($_POST['orders']))
{
    $orders=$_POST['orders'];
    foreach ($orders as $id) {
        $query="update history set status=-1 where id='$id'";
        $result=mysqli_query($link,$query);
        echo $query;
        $query="delete from orders where id='$id'";
        $result=mysqli_query($link,$query);
        echo 'rejected';
        if(!$result)
        {
            echo 'error';
            die();
        }
        $_SESSION['rejected']='rejected';
        header('location:deliveryorders.php');
    }
}
else
{
    echo "hello";
    $_SESSION['select']='Nothing selected';
    header('location:deliveryorders.php');
}
?>
