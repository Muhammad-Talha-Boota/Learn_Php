
<!-- $_SESSION Variable this Variable have three step for working.

1. session_start(); 

2. $_SESSION[name] = value; Set Session name & Value

3. echo $_SESSION[name]; Get Session value

There are two steps for Delete session.

1. session_unset();  Remove all Session variables

2. session_destroy(); Destroy the session -->


<?php

session_start();

$_SESSION["mysession"] = "Ali Ahmad";

echo "Session Craete Successfully."



?>