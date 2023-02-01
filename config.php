<?php
    // $db = mysqli_connect('localhost', 'root', '', 'sample');
    $sever_Name = 'localhost';
    $User_Name = 'root';
    $pass_word = '';
    $database = 'account_db';

    $db = mysqli_connect($sever_Name, $User_Name, $pass_word, $database);

    if($db->connect_error){
        die("connection filed" . $db->connect_error);
    }else{
        // echo ('connection successful');
    }
?>