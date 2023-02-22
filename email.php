<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $to = "Anitawilly@hotmail.com";
    $subject = "Testing PHP Email messages";
    $Message = "<b>How Are you my friend</b>";

    $header = "From:Emmanuelajah188@gmail.com";
    $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

    $myMail = mail($to,$subject,$Message,$header);
    
    if($myMail == true){
        echo"Message Sent Successfully";
    }else {
        echo "Message could not be sent...";
    }
    ?>
</body>

</html>