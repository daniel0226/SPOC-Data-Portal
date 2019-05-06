
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

    //store in session variables so we can access on any page
    $_SESSION["user"] = mysqli_query($db,$UsersDB);
    $_SESSION["photos"] = mysqli_query($db,$PhotosDB);
    $_SESSION["blogPosts"] = mysqli_query($db,$BlogPostsDB);
    $_SESSION["blognum"] = mysqli_num_rows($_SESSION["blogPosts"]);

    //test
    /*while($row = mysqli_fetch_assoc($_SESSION['photos'])) {
        echo $row['photo_path']."\n";
    }*/
?>

<div id="main-header" class="text-center">
    <h1 class="display-1 ">
        <img  src="../img/SPOC_patch.png" title="mission patch" class="img-fluid"/>
        <span id="title" class="font-weight-bold"> SPOC </span>
    </h1>
    <h2 id="title-2">Spectral Ocean Color Satellite</h2>
    <h3 class="title-3">Data Portal</h3>
</div>

<div id="main-container" class="container-fluid">
    <?php
        for ($i=0, $j=0; $i < $_SESSION["blognum"]; $i+=2) {
            echo "<div class=\"row\">";

                $blogPost = mysqli_fetch_assoc($_SESSION["blogPosts"]);
                $photo = mysqli_fetch_assoc($_SESSION["photos"]);

                echo "<div class=\"col-md-6\">";
                    echo "<div class=\"tile\">";
                        echo "<span class=\"photo-container\">";
                            echo "<img src=\"" . $photo['photo_path'] . "\" title=\"". $photo['photo_text'] . "\" class=\"blog-photo\" data-toggle=\"modal\"  data-target=\"#pic". $photo['id'] ."\" data-backdrop=\"false\"/>";
                        echo "</span>";
                        echo "<span class=\"text-container\">";
                            echo "<h3 class=\"title-3\">" . $blogPost['post_title'] . "</h3>";
                            echo "<p>" . $blogPost['post_text'] . "</p>";
                        echo "</span>";
                    echo "</div>";
                echo "</div>";

                echo "<div class=\"modal\" id=\"pic". $photo['id'] ."\">";
                    echo "<div class=\"modal-dialog\">";
                        echo "<div class=\"modal-content\">";
                            echo "<div class=\"modal-header\">";
                                echo "<h4 class=\"modal-title\">". $photo['photo_text'] ."</h4>";
                                echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                            echo "</div>";
                            echo "<div class=\"modal-body\">";
                                echo "<img src=\"" . $photo['photo_path'] . "\" class=\"img-fluid modal-img\"/>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                $j+=2;

                if($j < $_SESSION["blognum"]){
                    $blogPost = mysqli_fetch_assoc($_SESSION["blogPosts"]);
                    $photo = mysqli_fetch_assoc($_SESSION["photos"]);

                    echo "<div class=\"col-md-6\">";
                        echo "<div class=\"tile\">";
                            echo "<span class=\"photo-container\">";
                                echo "<img src=\"" . $photo['photo_path'] . "\" title=\"". $photo['photo_text'] . "\" class=\"blog-photo\" data-toggle=\"modal\"  data-target=\"#pic". $photo['id'] ."\" data-backdrop=\"false\"/>";
                            echo "</span>";
                            echo "<span class=\"text-container\">";
                                echo "<h3 class=\"title-3\">" . $blogPost['post_title'] . "</h3>";
                                echo "<p>" . $blogPost['post_text'] . "</p>";
                            echo "</span>";
                        echo "</div>";
                    echo "</div>";

                    echo "<div class=\"modal\" id=\"pic". $photo['id'] ."\">";
                        echo "<div class=\"modal-dialog\">";
                            echo "<div class=\"modal-content\">";
                                echo "<div class=\"modal-header\">";
                                    echo "<h4 class=\"modal-title\">". $photo['photo_text'] ."</h4>";
                                    echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                                echo "</div>";
                                echo "<div class=\"modal-body\">";
                                    echo "<img src=\"" . $photo['photo_path'] . "\" class=\"img-fluid modal-img\" />";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }

            echo "</div>";
        }
    ?>
</div>


<?php include("../html/bottom.html"); ?>
