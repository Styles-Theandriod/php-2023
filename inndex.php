<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <input type="text" placeholder="Enter Your Name" name="inputOne">
        <br>
        <button type="submit">Submit</button>
    </form>


    <?php
            //USING THE PHP $_REQUEST
        // if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        //     // collect our value from inputOne input field 
        //     $name = $_REQUEST['inputOne'];
        //     if(empty($name)){
        //         echo 'Name is empty';
        //     }else{
        //         echo $name;
        //     }
        // }

            //USING THE PHP $_POST 
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // Collect our value from inputOne input field 
            $name = $_POST['inputOne'];
            if(empty($name)){
                echo 'Name is empty';
            }else{
                echo $name;
            }
        }
                //USING THE PHP $_GET
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            // Collect our value from inputOne input field 
            $name = $_GET['inputOne'];
            if(empty($name)){
                echo 'Name is empty';
            }else{
                echo $name;
            }
        }
    ?>
</body>
</html>