<?php
    // PHP divides the operators in the following groups:

    // Arithmetic operators
    // Assignment operators
    // Comparison operators
    // Increment/Decrement operators
    // Logical operators
    // String operators
    // Array operators
    // Conditional assignment operators 


    //plus (+) Addition
    $num = 100;
    $value = 200;
    echo($num + $value) . '<br>';
    
    //plus (-) Addition
    $num = 100;
    $value = 200;
    echo($num - $value) . '<br>';

    //plus (*) Addition
    $num = 100;
    $value = 200;
    echo($num * $value) . '<br>';

    //plus (/) Addition
    $num = 100;
    $value = 200;
    echo($num / $value) . '<br>';

    //plus (%) Addition
    $num = 100;
    $value = 200;
    echo($num % $value) . '<br>';

    //plus (**) Addition
    $num = 100;
    $value = 200;
    echo($num ** $value) . '<br>';


    // Assignment Operators 
    $x = 10;
    $y = 20;
    
    $x += $y;
    
    $x -= $y;
    
    $x *= $y;
    
    $x /= $y;
    
    $x %= $y;
    
    $x **= $y; // Exponential raise to power eg 5

    echo($x). '<br>';

    $anitaHeight = 30;
    $anitaAge = 30 ;
    // Compare Operators in PHP 
    // = assignment Operator 
    // == equal to 
    $anitaAge == $anitaHeight;
    

    if($anitaAge == $anitaHeight){
        echo('we are thesame value');
    }else {
        echo('We are not thesame value');
    }

?>