<?php 

include('./config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username";
    }else{
        $Username = trim($_POST['username']);
    }
}

// checking if password is empty 
if(empty(trim($_POST["password"]))){
    $password_err = "Please enter password";
}else{
    $password = trim($_POST['password']);
}

// validate credentials 
if(empty($username_err) && empty($password_err)){

    // using the mysql select statement 
    $sql = "SELECT id, username";

}