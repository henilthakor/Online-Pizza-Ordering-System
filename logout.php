<?php
require 'db_config.php';
if(isset($_POST['logout']))
{
    session_destroy();
    header("Location: login.php");
}
?>
