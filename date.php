<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "&copy bizmarrow " . date("Y/m/d") . '<br>';
        echo date("Y/m/d") . '<br>';
        echo date("Y.m.d") . '<br>';
        echo date("Y-m-d") . '<br>';
        echo date("l") . '<br>';


        // working with time in php 
        echo "The time is " . date("h:i:sa "). "<br>";

        date_default_timezone_set("America/New_York");
        echo "The time is " . date("h:i:sa") . "<br>";

        $myDate = mktime(11, 14, 54, 2, 7, 2023);
        echo "Created date is " . date("Y-m-d,, h:i:sa", $myDate) . "<br>";

        $ourDate = strtotime("9:49am January 2 2023");
        echo "created date is " . date(" Y-m-d   h:i:sa", $ourDate). "<br>";

        $AniDate = strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $AniDate) .  "<br>";

        $AniDate = strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $AniDate) .  "<br>";

        $d = strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";


        echo "<br>";
        echo "<br>";
        echo "<br>";

    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
        
    
    ?>
</body>
</html>