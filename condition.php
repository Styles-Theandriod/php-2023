<?php 
$time = Date('H');

// if($time < '20'){
//     echo 'Have a Good Day';
// }elseif ($time < '10') {
//     echo 'Good Night';
// }
// else{
//     echo "Have a Wonderful Night Rest";
// }

// switch Statement in PHP

$today = 'Monday';

switch ($today) {
    case 'Monday':
        echo 'Today is'. ' ' . $today;
        break;

    case 'Tuesday':
        echo 'Today is' . ' ' . $today;
        break;
    
    default:
        echo ' i dont know what today is ';
        break;
}
