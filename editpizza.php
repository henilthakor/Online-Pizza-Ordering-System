<?php
require 'db_config.php';
if(isset($_POST['addpizza']))
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    $id=NULL;
    $name=$_POST['name'];
    $price=$_POST['price'];
    $src=$target_file;
    $type=$_POST['type'];
    $query="insert into pizza values('$id','$name','$price','$src','$type')";
    echo $query;
    $result=mysqli_query($link,$query);
    header('location:add.php');
}
else if(isset($_POST['deletepizza']))
{
    $id=$_POST['delete'];
    print_r($id);
    foreach($id as $item)
    {
        $query="delete from pizza where id='$item'";
        echo $query;
        $result=mysqli_query($link,$query);
        if(!$result)
        {
            echo 'error';
            die();
        }
    }
    $_SESSION['success']='added';
    header('location:delete.php');
}
?>
