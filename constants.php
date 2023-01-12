<?php
    // Parameters:
    // name: Specifies the name of the constant
    // value: Specifies the value of the constant
    // case-insensitive: Specifies 
    // whether the constant name should be case-insensitive. Default is false

    define('pie','3.147', true);
    echo(pie);

    echo '<br>';

    define('sentences', 'Today is thursday');
    echo(sentences) . '<br>';

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
    ]);
    echo cars[0];

    $myarray = array ('food', 'house');
    var_dump($myarray[0]);

?>