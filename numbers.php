<?php
    $ourNumber = 300;

    // is int (integer variable checking function ) Output bool(true)
    var_dump(is_int($ourNumber));
    echo '<br>';

    $value = 10;
    // is float (float checking function) Output bool(false)     
    var_dump (is_float($value));

    echo '<br>';

    $myNumber = 1.9e411;
    var_dump($myNumber);

    echo '<br>';

    $monday = 5985;
    var_dump(is_numeric($monday));
echo '<br>';
    
    $tuesday = "5985";
    var_dump(is_numeric($tuesday));
echo '<br>';

    $Wednesday = "59.85" + 100;
    var_dump(is_numeric($Wednesday));
echo '<br>';

    $thursday = "Hello";
    var_dump(is_numeric($thursday));
?>