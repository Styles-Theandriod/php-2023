<?php 

// SUPER GLOBAL VARIABLES ARE 
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION


$first_number = 200;
$last_number = 100;
function addition (){
    $GLOBALS['output_number'] = 
    $GLOBALS['first_number'] + 
    $GLOBALS['last_number'];
}

addition();
echo $output_number;
