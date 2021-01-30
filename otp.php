<?php
    session_start();
    if(!$_SESSION['email'])
    {
        header('Location: login.php');
    }
    
    $otp = $_SESSION['otp'];
    $emailid = $_SESSION['email'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer;
    $mail->isSMTP(); 
    //$mail->SMTPDebug = 2; 
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = "587"; // typically 587 
    $mail->SMTPSecure = 'tls'; // ssl is depracated
    $mail->SMTPAuth = true;
    $mail->Username = "";
    $mail->Password = "";
    $mail->setFrom("", "Online Pizza Ordering System");
    $mail->addAddress($emailid);
    $mail->Subject = 'Pizza Ordering System OTP';
    $mail->msgHTML("Greetings from the Online Pizza Ordering System!!!<br> Your OTP is ".$otp); // remove if you do not want to send HTML email
    $mail->AltBody = 'HTML not supported';
    //$mail->addAttachment('docs/brochure.pdf'); //Attachment, can be skipped
    $mail->send();

    //-----------------------------------------
    //-----------------------------------------

/*
    if(mail($emailid,"Pizza Delivery System OTP.",$msg)){
        echo "mail sent";
    }
    else{
        echo "mail not sent";
    }
*/
if(isset($_POST["submit"]))
{
    if($_POST["otp"]==$otp)
    {
        $_SESSION['logintime'] = time();
        header('Location: veg.php');
    }
    else{
        $_SESSION['otperror'] = true;
        header('Location: login.php');
    }
}


?>
<!DoctypeHTML>
<html>
<head>
<style>
    body{
        background-color: lightgrey;
    }
    .form{
        margin: auto;
        padding: 40px;
        top: 300px;
        background-color: white;
        width: 30%;
        text-align: center;
        box-shadow: 3px 3px 5px grey;
        /*border: 2px solid grey;*/
        border-radius: 10px;
    }
    .text{
        width: 50%;
        height: 30px;
        border: 2px solid grey;
        border-radius: 5px;
    }
    .button{
        width: 50%;
        height: 30px;
        size: 30px;
        border-radius: 5px;
    }
    .head{
        color: grey;
    }
</style>
</head>
<body>
    <br><br><br><br>
    <form method="POST" class="form">
    <h2 class="head">Please enter the OTP sent to your mail id.</h2><br>
    <input type="text" name="otp" class="text" id="otp"><br><br>
    <input type="submit" name="submit" class="button" id="submit">
    <h2 id='timer' style="color:red;">01:00</h2>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
        
        $("#submit").click(function() {
        
        var otp = $("#otp").val();
        
        if(otp=='') {
        alert("Please enter the OTP!!");
        return false;
        }
        
        $.ajax({
        type: "POST",
        url: "otp.php",
        data: {
        otp: otp
        }
        }
        });
        
        });
        
        });
    </script>
    <script>
    var timeleft = 59;
    var flag =0;
    setInterval(() => {
        document.getElementById("timer").innerHTML = "00:".concat(timeleft);
        if(timeleft>0){
            timeleft-=1;
        }
        if(timeleft == 0 && flag==0)
        {
            flag =1;
            timeout();
        }
    },1000);
    function timeout()
    {
        alert("OTP Expired!!!");
        location.replace('login.php');
    }
    </script>
</body>
</html>