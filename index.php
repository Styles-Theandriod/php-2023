<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Read Update And Delete PHP MYSQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- include_once
    require
    require_once -->

    <?php
    require('./config.php');
    ?>




    <form action="" method="post">
        <input type="text" name="Fname" placeholder="please Enter your Name">
        <input type="text" name="Lname" placeholder="Please Enter your Surname">
        <input type="password" name="Password" placeholder="Please Enter a password">
        <input type="password" name="cPassword" placeholder="Please Enter a password">
        <input type="button" value="Submit">
    </form>

    <?php
        $exists = false;

        if ($_SERVER["REQUEST_METHOD"] ==  "POST") {
            $fname = $_POST['Fname'];
            $lname = $_POST['Lname'];
            $password = $_POST['Password'];
            $confirm_password = $_POST['cPassword'];

            $sql = "Select * from account_tbl where Fname ='$fname'";
            $result = mysqli_query($db, $sql);
            $numbers = mysqli_num_rows($result);

        }

        if($numbers == 0){
            if(($password == $confirm_password) && $exists == false ){
                $hash = password_hash($password, PASSWORD_DEFAULT);

                PASSWORD 
            }
        }
    ?>
   

    

</body>

</html>