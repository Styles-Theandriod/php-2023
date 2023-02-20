<?php 
session_start()
?>

<?php
//  setcookie(name, value, expire, path, domain, secure, httponly);
    $_session[$cookie_name] = 'user';
    $cookie_value = 'emmanuel';
    setcookie($_SESSION[$cookie_name], $cookie_value, time() + (86400 * 30), "/"); //86400 = 1day

    if(!isset($_COOKIE[$cookie_name])){
        echo "cookie named" . ' ' . $cookie_name .  " is not set!";
    }else{
        echo "cookie named" . ' ' . $cookie_name .  " is set!" . "<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        echo ' ';
    }
    // set the expiration value to one hour ago 
    setcookie($cookie_name, $cookie_value, time() - 3600);

    echo "Cookie user is deleted";

    // Checking if Cookies is Enebled 
    setcookie($cookie_name,$cookie_value, time() + 3600, '/');

    // using the if condition to check wheather it's set or Not 
    if(count($_COOKIE) > 0){
        echo "Cookies are enebled";
    }else{
        echo"Cookie are disabled";
    }

?>





