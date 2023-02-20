<?php
    session_start()
?>

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
        $_SESSION['Favcolor'] = 'blue';
        $_SESSION['Favlanguage'] = "Javascript";

        echo "Favorite color is ". $_SESSION['Favcolor'] . '<br>';

        // session_unset(); remove all the values stored in a session 

        // session_destroy() destroyes an existing session 
    ?>
</body>
</html>