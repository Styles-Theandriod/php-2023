<?php
// what is a function 
// a block of code that does something and
// can be used repeatedly in a program 
// a function will not work automatically after the page is fully loaded 
// a function will be excuted after a call to the function 


// example of function 
// function functionName(){
//     code to run 
// }

// functionName();

function Message(){
    echo 'Hello World' . '<br>';
}

Message();
Message();

function parameter($fname, $lName){
    echo'your name is:' . ' '. $fname . '<br>';
    echo'and your last Name is:' . " " . $lName;
}

parameter('emmanuel', 'Okorafor');

