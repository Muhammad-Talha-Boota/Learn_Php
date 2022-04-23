
<!-- ### *** Note  *** ###-->

<!-- include_once & require_once is use for have any part that we include in the page is run only once time If bymistark we have same code then by use this function its not working. -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Html Basic Layout Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <?php include_once 'header.php'; ?>
        <?php include_once 'header.php'; ?>
        <div id="contact">
            <h2>Design Basic layout</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos eligendi iusto dolorem ipsam vero laboriosam sapiente vitae provident illo exercitationem, corrupti excepturi assumenda alias, libero ad quasi rem eius temporibus. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi obcaecati cum, molestias earum ipsam praesentium ipsa cupiditate et corrupti architecto?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam et ipsum nobis distinctio aliquam impedit necessitatibus similique. Ad, cumque ex?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nulla similique dolore laboriosam laborum hic vero! Perspiciatis animi ipsa doloribus.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam et ipsum nobis distinctio aliquam impedit necessitatibus similique. Ad, cumque ex?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam nulla similique dolore laboriosam laborum hic vero! Perspiciatis animi ipsa doloribus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptates veritatis harum saepe ea quae, et in sequi provident vitae eum iusto sint, earum ratione placeat corporis commodi. Repudiandae amet reprehenderit obcaecati sint ex debitis tempora animi similique natus nisi in, neque quae ipsa libero, odit perspiciatis exercitationem minus ut.</p>
        </div>
        <?php require_once 'sidebar.php';?>
        <?php require_once 'sidebar.php';?>
        <?php include 'footer.php'?>
    </div>
</body>
</html>