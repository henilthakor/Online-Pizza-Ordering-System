<?php
require 'import_a.php';
$_SESSION['page']="Change Password";
require 'header.php';

$message = "";
if(isset($_POST['submit']))
{
    if($_POST['currentpass']!= $_SESSION['pass'])
    {
        $message = "Enter correct current password.";
    }
    elseif($_POST['newpass']!=$_POST['confirmpass'])
    {
        $message = "New Password and Confirmed Password should be same.";
    }
    elseif($_POST['currentpass']==$_POST['newpass'])
    {
        $message = "Current password and New password should be different.";
    }
    else
    {
        $query="update users set password=\"".$_POST['newpass']."\" where username=\"".$_SESSION['user1']."\" and password=\"".$_POST['currentpass']."\"";
        mysqli_query($link, $query);
        $message = "Password Updated Successfully!";

    }
}
?>

<div class="container1" style="margin:auto; width:30%; background-color:lightgrey; border:grey; padding: 30px; border-radius: 10px;">
    <form style="margin:auto; text-align=center; font-size:18px;" method="POST">
        Enter Current Password: <input type="password" name="currentpass">
        <br><br>
        Enter New Password: <input type="password" name="newpass">
        <br><br>
        Confirm New Password: <input type="password" name="confirmpass">
        <br><br>
        <center>
        <input type="submit" class="button button3" style="width: 50%; border-radius:10px;" name="submit">
        </center>
        <p style="text-align: center; color: #f44336;"><?php echo $message; ?></p>
    </form>
</div>