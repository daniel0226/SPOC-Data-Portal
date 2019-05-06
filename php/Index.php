
<?php
    //using this means we only have to access the database once
    session_start();
    include("../html/top.html");
?>

<?php
    //Connect to Database
    //YOU'LL HAVE TO CHANGE THESE VALUES
    $DB_SERVER = 'localhost:3306';
    $DB_USERNAME = 'root';
    $DB_PASSWORD = '1234';
    $DB_DATABASE = 'termproject';

    $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
    //check connection
    if ($db->connect_error) {
        echo "connection failed";
        die("Connection failed: " . $conn->connect_error);
    }

    $UsersDB = "SELECT * FROM users";
    $PhotosDB = "SELECT * FROM photos";
    $BlogPostsDB = "SELECT * FROM blog_posts";
    $ArchiveDB = "SELECT * FROM archive_links";

    //store in session variables so we can access on any page
    $_SESSION["users"] = mysqli_query($db,$UsersDB);
    $_SESSION["photos"] = mysqli_query($db,$PhotosDB);
    $_SESSION["blogPosts"] = mysqli_query($db,$BlogPostsDB);
    $_SESSION["archive"] = mysqli_query($db,$ArchiveDB);
?>

<div id="main-header" class="text-center">
    <h1 class="display-1 ">
        <img  src="../img/SPOC_patch.png" alt="mission patch" class="img-fluid"/>
        <span id="title" class="font-weight-bold"> SPOC </span>
    </h1>
    <h2 id="title-2">Spectral Ocean Color Satellite</h2>
    <h3 id="title-3">Data Portal</h3>
</div>

<div class="container-fluid">

</div>


<?php include("../html/bottom.html"); ?>
