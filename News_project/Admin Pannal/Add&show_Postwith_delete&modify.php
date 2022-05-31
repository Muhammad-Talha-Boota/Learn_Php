<!-- HP News Project - Add & Show Post Lac # 152 -->

In This Tutorial we add And Show Post in the Post Madule.

First we Work for add post in add post first we Show Category in the Category Selection.

After Show Category we Code for save post in save-post.php file.
in this file first we Include Config file then we Create varabels for save Data.

We Also Create variable for save Image but With Code we Only Save Imge name in the data table
and Save Upload image in the Selected folder We The Code here Is Code For Save image in File and also Save Name of Image In Data table.

<!-- Code Example -->

<?php
// start code for upload img
if(isset($_FILES['fileToUpload'])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = end(explode('.',$file_name));
    $extensions = array('jpeg','jpg','png');

    if(in_array($file_ext,$extensions) === false)
    {
        $errors[] = "This extention file not allowed, Please choose a JPG or PNG file.";
    }

    if($file_size > 2097152)
    {
        $errors[] = "File Size must be 2MB or lower.";
    }

    if(empty($errors) == true){
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }else{
        print_r($errors);
        die();
    }
}
?>

Here Is Some variable For save Data inn the data Table.

<!-- Code Examople -->

<?php
session_start();

$p_tittle = mysqli_real_escape_string($conn, $_POST['post_title']);
$p_desc = mysqli_real_escape_string($conn, $_POST['postdesc']);
$p_cat = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M, Y");
$author = $_SESSION['u_id'];

$sql = "INSERT INTO post(title,description,category,post_date,author,post_img) VALUES('{$p_tittle}','{$p_desc}',{$p_cat},'{$date}',{$author},'{$file_name}');";
$sql .= "UPDATE category SET post = post + 1 WHERE category_id = {$p_cat}";
if(mysqli_multi_query($conn,$sql)){
    header("Location: {$hostname}/admin/post.php");
}else{
    echo "<div class='alert alert-danger'>Query Failed.</div>";
}
?>

By this Code we Save user input Data in the Data table.




Then We Code For Show Data In the post Module.
First we go in the post.php File Then we start Code For the Shoe data into the Table and Also we Code for Pagination.
Here we Also Code For Secure All Post from the users.
onlay Admin See All Post. Users Only see Here on Post.

<!-- Code Example -->

<?php
                include "config.php";
                // start code for pagenation
                $limit = 5;
                if(isset($_GET['page'])){
                    $page = $_GET['page'];
                }else{
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;
                // End Code for pagination and set LIMIT in Query that carry all data. 

                
                // Code For Secure post from the Users
                if($_SESSION['u_role'] == 1){
                    $sql = "SELECT * FROM post
                LEFT JOIN category ON post.category = category.category_id 
                LEFT JOIN user ON post.author = user.user_id  
                ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
                }elseif($_SESSION['u_role'] == 0){
                    $sql = "SELECT * FROM post
                LEFT JOIN category ON post.category = category.category_id 
                LEFT JOIN user ON post.author = user.user_id WHERE post.author = {$_SESSION['u_id']}  
                ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
                }
                // end Code Secure


                $result = mysqli_query($conn, $sql) or die('Query Faild.');
                if (mysqli_num_rows($result) > 0) {

                ?>
                here is Table
                This Code end on the End Of Table Tag

                <?php
                
            }
            // start Code for Pagination
            $sql1 = "SELECT * FROM post";
            $result1 = mysqli_query($conn,$sql1) or die('Query Faild');
            if(mysqli_num_rows($result1)>0){
                $total_record = mysqli_num_rows($result1);
                $total_page = ceil($total_record / $limit);

                echo "<ul class='pagination admin-pagination'>";
                if($page > 1 ){
                    echo '<li><a href="post.php?page='.($page - 1).'" >Prev</a></li>';
                }
                
                for($i=1; $i <= $total_page; $i++){
                    if($i == $page){
                        $active = "active";
                    }else{
                        $active = "";
                    }
                    echo '<li class="' . $active . '"><a href="post.php?page='.$i.'"> '.$i.' </a></li>';
                }
                if($total_page > $page){
                    echo '<li><a href="post.php?page='.($page + 1).'" >Next</a></li>';
                }
                
                echo "</ul>";

            }
            // End Code for Pagination
            ?>


So we Learn these Code in the News_prj 5th tutorial.
And Very Next Tutorial we Learn About Edit And Delete Post........


    <!-- PHP News Project - Update & Delete Post Lac # 153 -->

    IN this Tutorial we Code For Update And delete Post. First we Work For Update post When we click On Update Button its genrate A update File with Selected id and categegory_id. By this Id we update the data. And Also Update and Delete the NO of post in the category table. 

    For Update we have Another File in this tutorial we have an other file for update and Code for update in save_update_post.php 

    C:\xampp\htdocs\news_prj\admin\save-post.php
    C:\xampp\htdocs\news_prj\admin\delete-post.php
    C:\xampp\htdocs\news_prj\admin\update-post.php
    C:\xampp\htdocs\news_prj\admin\save_update_post.php
 
    This Is All Location File For the update and Delete post.
    