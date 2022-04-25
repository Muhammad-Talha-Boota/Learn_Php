<!-- $_COOKIE Variable Have two Steps First is Create Cookie and Second is view cookie. And Cookie Given in the start of the code file.

1. Create Cookie.
setcookie(name ,value ,expire ,path ,domain ,secure ,httponly)

2. View Cookie value
$_COOKIE[name] -->

<?php

$cookie_name = "Umair";

$cookie_value = "Quadacts";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');

?>


<html>


<body>

    <?php

    if(!isset($_COOKIE[$cookie_name])){
        echo "COOKIE NOT SET";
    } else {
        echo $_COOKIE[$cookie_name];
    }

    ?>


</body>

</html>