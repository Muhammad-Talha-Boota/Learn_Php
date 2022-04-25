<?php

echo "COOKIE value is : " .  $_COOKIE['Umair'];

setcookie('Umair', '', time() - (86400 * 30), '/');


?>