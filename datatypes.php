<?php 
    // strings 
    // Integer 
    // array
    // object
    // float 
    // Boolean
    // NULL
    // resource 
    

    $x = "Hello world";
    $y = "I am fine world";

    echo $x;
    echo "<br>";
    echo $y;

    echo '<br>';

    $num = 500;
    $whatsap = 900;

    echo ($num . ' ' . $whatsap);

echo '<br>';
var_dump( $whatsap);


// a floating point number 
$float = 50.5;
var_dump($float);

// a boolen reapresents a true and false values 
$playing = false;
$notPlaying = true;
echo ('<br>');
var_dump($playing);


//  Arrays in Php 
//  an array stores multiple values in a single variables 
echo '<br>';
$fruits = array('orange', 'pawpaw', 'mango', 'chashew');
var_dump($fruits);

echo '<br>';
echo '<br>';

// this is a class object in php 

class place {
    public $state;
    public $village;
    
    public function __construct($state, $village){
        $this->state = $state;
        $this->village = $village;
    }

    public function message(){
        return 'my state is' . ' ' . $this->state . ' ' . 'and my village is'
        . ' ' . $this->village;
    }
}


$myplace = new place('London', 'Central area' );
echo $myplace -> message();
echo '<br>';
$myplace = new place('wuse zone 1', 'lugbe fct abuja');
echo $myplace -> message();

echo '<br>';

// php null values 
$emekose = null;
var_dump($emekose);

echo '<br>';

// creating a constant viriable in php 

 define('constant', 'i am very fine today');

 echo(constant);




