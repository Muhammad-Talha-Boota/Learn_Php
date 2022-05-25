
<!-- PHP News Project - Add Modify Delete Users Lac # 149 -->

This is 2nd tutorial of News Project.

In this Tutorial we learn about Add Modify And Delete the Users.

First we Work in the user.php file 

Here we use mysqli_real_escape_string() sql function for protect our data from the heackers.
In this Function there are two parameters forst is connetion name and second is label_name.

<!-- For Example of sql function -->

$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$lname = mysqli_real_escape_string($conn,$_POST['lname']);
$user = mysqli_real_escape_string($conn,$_POST['user']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$role = mysqli_real_escape_string($conn,$_POST['role']);

we use md5() Function for Password Variable protection.


IN Short In this Tutorial we Create User Update User and Dalete User. 
And All Code File Path in Admin Folder.


Working Path that we describe in Lac # 149 For this Tuotorial:  http://localhost/news_prj/admin/users.php












