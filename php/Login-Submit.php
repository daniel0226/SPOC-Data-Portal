<?php include("../html/top.html"); ?>
<?php
    $UserName = $_GET["Username"];
    $Password = $_GET["Password"];
    
    function debugPrint()
    {
        global $UserName;
        global $Password;
        echo "<h1>DEBUG:    Username: $UserName | Password: $Password</h1>";
        return;
    }
    debugPrint();
    
?>
<?php include("../html/bottom.html"); ?>