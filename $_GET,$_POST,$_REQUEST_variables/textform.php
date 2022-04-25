

HTTP Connection
SERVER Information
HOST information
URL information


<?php

// $_GET variable is use for get data in the form this variable show data in the URL and also stor data into the $_GET variable(Super Globel variable). we print this variable in any file with the print_r function.

// For $_GET method

echo "<pre>";
print_r($_GET);

echo $_GET['fname'];


// $_POST Variable is use for send data into the data Base this variables also Work like a $_GET Variable But this variable dos't show data into the url.


// For $_POST method

echo "<pre>";
print_r($_POST);

echo $_POST['fname'];


//  $_REQUEST variable is use for both variable $_GET and $_POST. Its work like a $_GET and $_POST variable.

// For $_REQUEST method

echo "<pre>";
print_r($_REQUEST);

echo $_REQUEST['fname'] . "<br>";

echo $_REQUEST['age'] . "<br>";



?>

<a href="form.php">BACK</a>


