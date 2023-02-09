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
        // echo readfile('./batman.txt');
        // $myfile = fopen('./batman.txt', 'r') or die('Unable to open');
        // echo fread($myfile, filesize('./batman.txt'));
        // fclose($myfile);


        // $ourFile = fopen('./batman.txt', 'w');
        // $ourFile = fopen('./batman.txt', 'w') or die('Unable to open this file');
        // $messages = 'THank you so much for jouring with me through PHP class';
        // fwrite($ourFile, $messages);
        // echo readfile('./batman.txt');
        // fclose($ourFile);


        // $ourFile = fopen('./batman.txt', 'a') or die('Unable to open this perticular file today');
        // $messages = 'This is another line of text written by a bot from the internet';
        // fwrite($ourFile,$messages);
        // echo readfile('./batman.txt');
        // fclose($ourFile);
    ?>

    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="username">
    </form>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST['username'];
            $ourFile = fopen('./batman.txt', 'w') or die('Unable to open this perticular file today');
            $messages = $name;
            fwrite($ourFile, $messages);
            echo readfile('./batman.txt');
            fclose($ourFile);
        }
    ?>
</body>
</html>
