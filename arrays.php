<?php
// indexed array 
// associative array 
// multidimensional array 
// sorting Array 

// Normal Array  or indexed array
$fruits = array('mango', 'orange', 'pawpaw', 'pea');
echo 'I like ' . $fruits[0] . ' ' . 'and' . ' '. $fruits[1] . ' ' . 'with' . ' ' . $fruits[2];


// looping through the entire values
$cars = array("Benz", "Volvo", "Toyota");
echo '<br>';

$newArray = count($cars);

for ($i=0; $i < $newArray; $i++) { 
    echo $cars[$i];
    echo '<br>';
}

// $cars[0] = '';
// $cars[1] = '';
// $cars[2] = '';

echo '<br>';

// PHP ASSOCIATIVE ARRAY 
$age = array('emma'=>'35', 'Benson'=>'19', 'Ogechi'=>'10');

echo "emma is". $age['emma'] . 'years old';

// $age['peter obi'] = '50';
// $age['peter obi'] = '50';
// $age['peter obi'] = '50';

echo '<br>';
// To loop inside an Associative array we use the foreach loop
foreach($age as $key => $value){
    echo "Key = ". $key . '<br>'  .  "value=" . $value . '<br>';
};


// PHP MULTIDIMENSIONAL 

//AKA TWO DIMENSIONAL ARRAYS 
$friends = array(
    array('Joyce', 'Magret', 'Gold'),
    array('Anita', 'Ann', 'Annabel'),
    array('Rejoyce', 'Rebecca', 'Rehanna'),
    array('Joyce', 'Magret', 'Gold'),
);

var_dump($friends[1][0]);

echo '<br>';

for($num = 0; $num < 4; $num++ ){
    echo "<p><b>Row number $num</b></p>";
    echo "<ul>";
    for ($num2 = 0; $num2 < 3; $num2++) {
        echo "<li>" . $friends[$num][$num2] . "</li>";
    }
    echo "</ul>";
}


echo('<br>');

// ASSESMENT 
$Family = array(
    array(
        array('Anita', 'Ann', 'Annabel'),
        array('Rejoyce', 'Rebecca', 'Rehanna'),
        array('Joyce', 'Magret', 'Gold'),
        )
    );
    
    echo $Family[0][1][0];
    
    // PHP SORTING FUNCTION FOR ARRAY
    // sort(); sort array in ascending order 
    // rsort(); sort arrays in descending order
    // asort(); sort associative arrays in ascending order, according to the value 
    // ksort(); sort associative arrays in ascending order, according to the key
    // arsort(); sort associative arrays in descending order, according to the value
    // krsort(); sort associative arrays in descending order, according to the key
    
    $mySort = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Satuday', 'Sunday');
    // sort($mySort);
    rsort($mySort);
    $sortItem = count($mySort);
    echo '<br>';
    echo '<br>';
    
    for ($y = 0; $y < $sortItem; $y++) {
        echo $mySort[$y];
        echo '<br>';
    }
    
    echo '<br>';
    echo '<br>';
    
    
    $product = array('emma'=>'00', 'Benson'=>'200', 'Ogechi'=>'300');
    echo '<br>';
    echo asort($product);
    
    foreach ($product as $keys => $keys_value) {
        echo $keys_value;
        echo '<br>';
    }

    