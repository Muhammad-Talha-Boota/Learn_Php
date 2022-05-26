<!-- PHP News Project - Login & Logout Tutorial Lac # 151 -->

In this tutorial we learn about login And logout Admin Panal.

then After given data from the database we create a session.

And If Our username And Password is Correct then we are in post.php page . Else we have an error

<!-- code example -->

<?php
if (isset($_POST['login'])) {
    include "config.php";
    $u_name = mysqli_real_escape_string($conn, $_POST['username']);
    $u_pass = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT user_id, username, role FROM user WHERE username = '{$u_name}' AND password = '{$u_pass}'";
    $result = mysqli_query($conn, $sql) or die("Query Faild");
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            session_start();
            $_SESSION['u_id'] = $row['user_id'];
            $_SESSION['u_name'] = $row['username'];
            $_SESSION['u_role'] = $row['role'];

            header("Location: {$hostname}/admin/post.php");
        }
    } else {
        echo "<div class='alert alert-danger'>Username or Password Not Match.</div>";
    }
}
?>

After That we Work in Logout File. In Logout File We Start Session , Unset Session And Destro the Session. And Give Location of Ligin File.

<!-- code example -->

<?php

include "config.php";

session_start();

session_unset();

session_destroy();

header("Location: {$hostname}/admin");


?>




After That We Secure user and Cetogery Links From the users and Also Secure The link on the Url With the Role. That we Have From the The Sessuion If The Role is Equal To 0 then This User not Shown the user And Category links.

<!-- code example -->

<ul class="admin-menu">
    <li>
        <a href="post.php">Post</a>
    </li>
    <?php
    if ($_SESSION['u_role'] == 1) {
    ?>
        <li>
            <a href="category.php">Category</a>
        </li>
        <li>
            <a href="users.php">Users</a>
        </li>
    <?php
    }
    ?>
</ul>

And We Work for the Login person in the url if by mestake the user type Admin path in the Url then it is on post link with this Code.

<!-- code example -->
<?php
session_start();

if (isset($_SESSION['u_name'])) {
    header("Location: {$hostname}/admin/post.php");
}
?>