<!-- while loop  -->
<!-- do while loop  -->
<!-- For loop  -->
<!-- Foreach Loop  -->
<!-- Break and Continue statement  -->
<?php
    // while loop 

$myLoop = 0;
// while($myLoop <= 100){
//     echo'The number is:' . ' ' . $myLoop . ' <br>';
//     // $myLoop = $myLoop + 10;
//     $myLoop += 10;
// }

// do while loop 
// do {
//     code to be executed
// }while(condition is true)

// do {
//     echo 'The number is:' . ' ' . $myLoop . ' <br>';
//     $myLoop += 10;
// } while ($myLoop <= 100);

// $x = 6;

// do {
//     $x++;
//     echo "The number is: $x <br>";
// } while ($x <= 7);


// for loop

// for ($i=0; $i <= 30 ; $i++) { 
//     echo 'THe Number Is:' . $i . '<br>';
// }

// foreach loop (arrays in PHP)
    $food = array('indomie', 'sweet', ' egusi', 'pando', 'spagatti');

// foreach ($food as  $key) {
//     echo ($key . '<br>');
// }

$age = ['broEmma' => '50', 'anita' => '25'];

foreach ($age as $key => $value) {
    echo  $value . '<br>';
}








