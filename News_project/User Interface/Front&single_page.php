<!-- PHP News Project - Front & Single Page Lac # 155 -->

In this tutorial we create code for Project front/Single Page.

First we start work is index.php file in this file we use same code of post.php and show all post on this page.

then we use substr() function for have 150 chrachters of description then we code for pagination from post.php file etc.

After Show all post then we work in single_page.php for detail of post in this file we have same code and show all inputs on id against etc.


<!-- PHP News Project - Category Page Lac # 156 -->

In this tutorial We learn about Category of News we Work for the Category and Menu Of the News Project.
when User Click on category then Category Genorate All News About this Catogry. Working for Category Also in Home Page Single Page Menu etc.

we code for the Category in the Category.php And index.php File.


<!-- PHP News Project - Auther Page Lac # 157 -->

In this tutorial we learn about the Auther News. When User click on Auther Link then we Genrate All News Relative to this Auther. For the Auther We Use Same Code of category for the Auther. We Code for Auther from all the view where the Link for Auther like From Home Single Page etc.

We Code For the Auther Page in the Author.php File.


<!-- PHP News Project - Search Page Lac # 158 -->

In this tutorial We Learn About search Page. When we Search Some News In the Search Page then its Require Rekative News From the All News.
We Have same Code of the Author.php File But there is Some Change in this File First we get Search term From the Side Bar Search input then we Ger this Search_term And match this Term wuith our data base Record We Use where Clause in the Query this is Here.

WHERE title = LIKE '%{$search_term}%' OR description = LIKE '%{$search_term}%'.
By write This Line in the Where Clause its Return the Search Match Data.

We Code For the Search Page in the Search.php File


<!-- PHP News Project - Recent Post Page Lac # 159 -->

In this Tutorial We Learn about Recent Post. We Code For Show Recent post in the Sidebar.

We Work in the Sidebar.php File.


<!-- PHP News Project - Dynamic Title Lac # 160 -->

In this Tutorial We Learn About Dynamic title. Here First we Have the PHP_SELF From the $_SERVER When we echo $_SERVER in the print_r tag then it Genrate us All Server information Here PHP_SELF on of the Part of this.
By php_self we Have the Dynamic File Name in the recomend tag Then We Use 'Basename' variable For Genrate Only File Name.
by This File Name We Create switch Case For All The File Of the website. Here is the Example of Swith Case.

<!-- Example -->

switch ($page) {
case 'single.php';
echo "Single Page";
break;
case 'category.php';
echo "Category";
break;
case 'author.php';
echo "Author";
break;
case 'search.php';
echo "Search";
break;
default;
echo "News Site";
}

After Create Switch Case We Work For Dynamic Like When User open category we Have the Tittle with the Same name. When We Search Some Data We Have the tittle With The Same Search_term. shoe author in the etc

<!-- Code Example  -->

switch ($page) {
    case 'single.php';
        if (isset($_GET['id'])) {
            $sql_title = "SELECT * FROM post WHERE post_id = {$_GET['id']}";
            $result_title = mysqli_query($conn, $sql_title) or die('Title Query Faild.');
            $row_title = mysqli_fetch_assoc($result_title);
            $page_title = $row_title['title'];
        } else {
            $page_title = "single Page id Not found.";
        }
        break;
    case 'category.php';
        if (isset($_GET['cid'])) {
            $sql_category = "SELECT * FROM category WHERE category_id = {$_GET['cid']}";
            $result_category = mysqli_query($conn, $sql_category) or die('Category Query Faild.');
            $row_category = mysqli_fetch_assoc($result_category);
            $page_title = $row_category['category_name'] . " News";
        } else {
            $page_title = "Category id Not found.";
        }
        break;
    case 'author.php';
        if (isset($_GET['aid'])) {
            $sql_author = "SELECT * FROM user WHERE user_id = {$_GET['aid']}";
            $result_author = mysqli_query($conn, $sql_author) or die('Author Query Faild.');
            $row_author = mysqli_fetch_assoc($result_author);
            $page_title = "News By " . $row_author['username'];
        } else {
            $page_title = "Author id Not found.";
        }
        break;
    case 'search.php';
        if (isset($_GET['search'])) {
            $page_title = $_GET['search'];
        } else {
            $page_title = "Search Not found.";
        }
        break;
    default;
        $page_title = "News Site";
}



<!-- PHP News Project - Website Setting Page Lac # 161 -->

