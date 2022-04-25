
<!-- Here we Destroy the all session -->

<?php

session_start();

session_unset();

session_destroy();

echo "Session is Destroyed";

?>