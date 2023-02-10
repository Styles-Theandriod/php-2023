<?php
//  setcookie(name, value, expire, path, domain, secure, httponly);
    $cookie_name = 'user';
    $cookie_value = 'emmanuel';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); //86400 = 1day

    if(!isset($_COOKIE[$cookie_name])){
        echo "cookie named" . ' ' . $cookie_name .  " is not set!";
    }else{
        echo "cookie named" . ' ' . $cookie_name .  " is set!" . "<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
        
    }

?>