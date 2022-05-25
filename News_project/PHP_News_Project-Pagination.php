<!-- PHP News Project - Pagination Lac # 150 -->

This is 3rd tutorial of News_project.

In this Tutorial we learn about Pagination.

<!-- How to calculate Total Pages..? -->

Total Record = 7
Limit per page = 3

Total Page = Total Record / Limit per page
= 7 / 3 = 2.333
Total Pages = ceil(Total Records / Limit Per page) -> 3

<!-- How to show Differnt Records on each Page..? -->

<!-- Query for Limit -->
SELECT * FROM table_name
LIMIT offset , Limit;

SELECT * FROM TableName LIMIT 0,3 For Page
SELECT * FROM TableName LIMIT 3,3 For Second Page
SELECT * FROM TableName LIMIT 6,3 For Third Page

<!-- How to calculate offset.? -->

offset = (Page Number - 1) * LIMIT.

Offset = (1-1) * 3 = 0
<!-- Calculation for Page # 1  -->
Offset = (2-1) * 3 = 3
<!-- Calculation for Page # 2  -->
Offset = (3-1) * 3 = 6
<!-- Calculation for Page # 3  -->

ON the base of these formulas we Create pagination SuccessFully.

<!-- Some Example of Pagination in real time. -->

<!-- start code for pagenation -->
$limit = 3;
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = 1;
}
$offset = ($page - 1) * $limit;
<!-- End Code for pagination and set LIMIT in Query that carry all data. -->

$sql = "SELECT * FROM user ORDER BY user_id ASC LIMIT {$offset},{$limit}";




<!-- start Code for Pagination -->
$sql1 = "SELECT * FROM user";
$result1 = mysqli_query($conn,$sql1) or die('Query Faild');
if(mysqli_num_rows($result1)>0){
$total_record = mysqli_num_rows($result1);
$total_page = ceil($total_record / $limit);

echo "<ul class='pagination admin-pagination'>";
    if($page > 1 ){
    echo '<li><a href="users.php?page='.($page - 1).'">Prev</a></li>';
    }

    for($i=1; $i <= $total_page; $i++){ if($i==$page){ $active="active" ; }else{ $active="" ; } echo '<li class="' . $active . '"><a href="users.php?page=' .$i.'"> '.$i.' </a></li>';
        }
        if($total_page > $page){
        echo '<li><a href="users.php?page='.($page + 1).'">Next</a></li>';
        }

        echo "</ul>";

}
<!-- End Code for Pagination -->

