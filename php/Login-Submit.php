<?php session_start();
 include("../html/top.html"); ?>
<?php

    $DB_SERVER = 'localhost:3306';
    $DB_USERNAME = 'root';
    $DB_PASSWORD = '1234';
    $DB_DATABASE = 'termproject';
    $db = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);

    $myusername = mysqli_real_escape_string($db,$_POST['Username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['Password']);
    //echo "Your username after escaping: {$myusername}<br>";
    //echo "Your password after scaping and MD5: {$mypassword}<br>";

    $sql = "SELECT * FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_array($result);
        $UN = $row['username'];
        $PW = $row['password'];
        $EN = $row['enabled'];
        $EMAIL = $row['email'];
        header("Location: ../php/RawData.php");
        //echo "$UN $PW $EN $EMAIL";
    }else{
        $message = "Incorrect username or password";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>window.location='../php/Login.php';</script>";
        //header("Location: ../php/Login.php");
    }

?>
<?php include("../html/bottom.html"); ?>
