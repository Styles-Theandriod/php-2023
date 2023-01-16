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
    $anitaAge = 30;


    // Compare Operators in PHP 
    // = assignment Operator 
    // == equal to (checks for value) 
    // === identical operator (checks for DataType and value)
    // != Not equal 
    // <> Not equal 
    // !== Not identical 
    // > Greater Than
    // < less Than 
    // >= Greater Than or equal to 
    // <= Less Than or equal to 
    // <=> space ship operator
    // $anitaAge == $anitaHeight;
    

    // if($anitaAge == $anitaHeight){
    //     echo('we are thesame value');
    // }else {
    //     echo('We are not thesame value');
    // }

    // ===
    // if($anitaAge === $anitaHeight){
    //     echo('We are thesame dataType and value');
    // }else{
    //     echo ('We are NOT thesame dataType and value');

    // }

    // !=
    // if($anitaAge != $anitaHeight){
    //     echo('We are thesame dataType and value');
    // }else{
    //     echo ('We are NOT thesame dataType and value');

    // }

    // <>
    // if($anitaAge <> $anitaHeight){
    //     echo('We are thesame dataType and value');
    // }else{
    //     echo ('We are NOT thesame dataType and value');

    // }
    
    //!==
    // if($anitaAge !== $anitaHeight){
    //     echo('We are thesame dataType and value');
    // }else{
    //     echo ('We are NOT thesame dataType and value');

    // }

    // declare a viriable a and b
    $a = 50;
    $b = 100;

    // var_dump($a !== $b);
    // if($a !== $b){
    //     echo('a is not with b');
    // }else{
    //     echo('we are never the same');
    // }

    // > Greater Than
    // if($a > $b){
    //     echo('a is greater than b');
    // }else{
    //     echo('b is Greater Than a');
    // }

    // < less Than
    // if($a < $b){
    //     echo('a is greater than b');
    // }else{
    //     echo('b is Greater Than a');
    // }

    // >=
    // if($a >= $b){
    //     echo('we are equal');
    // }else{
    //     echo('we are NOt equal');
    // }

    // echo "<br>";

    // <=
    // if($a <= $b){
    //     echo('we are equal');
    // }else{
    //     echo('we are NOt equal');
    // }

// <=> Space Ship Operator
    // print out else statement if both values are equal
        // prints out the true statement if one is different 
    // if ($a <=> $b) {
    //     echo ('we are equal');
    // } else {
    //     echo ('we are NOt equal');
    // }

    // Assignment for princess Annita 💥
    // Redo what we have done in today comparison class with if and else 
    // statement 

    // Create an account with GITHUB 


    // PHP INCREMENT AND DECREAMENT 
    // post increment 
    // pre increment 
    echo'<br>';
    // increment 
    //echo(++$a); //pre-increment
    // echo($a++); //post-increment

    // Decrement 
    //echo(--$a); //pre-decrement
    // echo($a--); //post-decrement
    echo "<br>";

    // PHP LOGICAL OPERATORS 
    // and (And) if both are true returns true
    // if($a == 100 and $b == 50){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }

    // or (or) one must be true to return a true response
    // the both has to be false to return a false value; 
    // if($a == 20 or $b == 20){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }

    // Xor (xor) one must be true to return a true response
    // the both has to be false to return a false value;
    // if($a == 100 xor $b == 100){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }

    // && (And) 
    // if($a == 50 && $b == 100 ){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }

    // || (or) 
    // if($a == 50 || $b == 100){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }

    // ! (Not) 
    // if($a != 100 || $a != 200){
    //     echo('united');
    // }else{
    //     echo('Not United');
    // }


// PHP conditional assignment OPerators 
// ?: Ternary Operator 
    $user = 'ANITAs';
    $myUser = 'emmanuel';
   $result = $myUser == $user ? 'Anonymouse User' : 'Undefined User';
    echo($result);
    
