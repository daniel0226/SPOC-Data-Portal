<?php
    session_start();
    include("../html/top.html");
?>
<div class = "DownloadPage">
    <h1><strong>SPOC Raw Data</strong></h1>

    <?php
        $DB_SERVER = 'localhost:3306';
        $DB_USERNAME = 'Test';
        $DB_PASSWORD = '200149907Dk!';
        $DB_DATABASE = 'termproject';
        $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
        $ArchiveDB = "SELECT * FROM archive_links";
        $_SESSION["archive"] = mysqli_query($db,$ArchiveDB);
        $_SESSION["archnum"] = mysqli_num_rows($_SESSION["archive"]);
        for ($i=0; $i < $_SESSION["archnum"]; $i++) {
            $link = mysqli_fetch_assoc($_SESSION["archive"]);
            echo "- ";
            echo "<a href=\"". $link["link_link"] . "\">" . $link["link_text"] . "</a>";
            echo "<br/>";
        }
    ?>
</div>
<?php include("../html/bottom.html"); ?>
