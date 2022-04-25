<?php
    if(isset($_POST["receiver"]) && isset($_POST["subject"]) && isset($_POST["body"])) {
        $to = $_POST["receiver"];
        $sub = $_POST["subject"];
        $body = $_POST["body"];
        $header = 'From: noreply@codeandtheory.com';
        $sanitize_email = filter_var($to, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitize_email, FILTER_VALIDATE_EMAIL)) {
            $mail = mail($to,$sub,$body,$header);
            echo $mail ? "Email sent" : "Email not sent";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - 301</title>
</head>
<body>
    <h3>Send Mail</h3>
    <hr>
    <form action="" method="post">
        To: <input type="email" name="receiver" id=""> <br/>
        Subject: <input type="text" name="subject" id=""> <br/>
        Mail: <br/>
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <br/>
        <input type="submit" value="Send"/>
    </form>
</body>
</html>