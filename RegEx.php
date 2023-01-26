<?php 

$str = "visit BIZmarrow";

$pattern = "/bizmarrow/i";

echo preg_match($pattern, $str);

 echo ('<br>');
 
 $sentences = 'The rain in SPAIN falls mainly on the plains.';
 $Textpattern = "/ain/i";
 echo preg_match_all($Textpattern, $sentences);
 
 echo ('<br>');

$strings = "Visit Microsoft!";
$Mypattern = "/microsoft/i";
echo preg_replace($Mypattern, "Bizmarrow Technologies", $strings);
echo "<br>";

$Ourstr = "visit BIZmarrow";

$wordpattern = "/bizmarrow/";

echo preg_match($wordpattern, $Ourstr);


