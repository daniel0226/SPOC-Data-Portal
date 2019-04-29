
<?php include("../html/top.html"); ?>

<?php
    //Connect to Database
    //YOU'LL HAVE TO CHANGE THESE VALUES
    $DB_SERVER = 'localhost:3306';
    $DB_USERNAME = 'Test';
    $DB_PASSWORD = '200149907Dk!';
    $DB_DATABASE = 'termproject';
    $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);

    session_start();

    $UsersDB = "SELECT * FROM users";
    $PhotosDB = "SELECT * FROM photos";
    $BlogPostsDB = "SELECT * FROM blog_posts";
    $ArchiveDB = "SELECT * FROM archive_links";

    $Users = mysqli_query($db,$UsersDB);
    $Photos = mysqli_query($db,$PhotosDB);
    $BlogPosts = mysqli_query($db,$BlogPostsDB);
    $Archive = mysqli_query($db,$ArchiveDB);
?>

<?php include("../html/body.html"); ?>
<?php include("../html/bottom.html"); ?>