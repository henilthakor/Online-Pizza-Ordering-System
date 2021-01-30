<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style type="text/css">
        #disappear
        {
            background:green;
            width:400px;
            margin:0 auto;
            color:#fff;
            padding:10px;
            text-align:center;
        }
</style>
</head>
<?php
require "db_config.php";
if(!isset($_SESSION['user1']))
{
    header("Location:login.php");
}
?>
<script type="text/javascript">
    $(function() {
setTimeout(function() { $("#disappear").fadeOut(1500); }, 2000)
})
</script>
