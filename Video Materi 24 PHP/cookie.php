<?php 

    $cookiw_name = 'user';
    $cookie_value = 'joni';

    setcookie($cookie_name, $cookie_value);

    $cookie_value = 'tejo';

    setcookie($cookie_name, $cookie_value);

    echo $_COOKIE[$cookie_name1];

    setcookie("user", "", time() - 3600);

    echo '<br>';

    var_dump($_COOKIE);

?>