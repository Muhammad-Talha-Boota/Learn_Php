<!-- $_SERVER variable is use for have information about the Following.

1. HTTP Connection
2. SERVER Information
3. HOST information
4. URL information

This Variable is also use for Run Input Date into the same file. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form page</title>
</head>

<body>

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        Name : <input type="text" name="fname"><br><br>

        Age &nbsp;&nbsp; : <input type="text" name="age"><br><br>

        <input type="submit" name="save"> <br><br>

    </form>

    <?php

    if (isset($_POST['save'])) {
        echo $_POST['fname'] . "<br>";
        echo $_POST['age'] . "<br>";
    }


    // This Array Return Us All information About Server

    echo "<pre>";
    print_r($_SERVER);
    

    ?>

</body>

</html>