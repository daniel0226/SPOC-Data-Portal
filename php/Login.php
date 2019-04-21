
<?php include("../html/top.html"); ?>
<div id="login">
    <form action="login-submit.php" method="get" enctype="multipart/form-data">
        <div class = "container">
            <h1><strong>Log in</strong></h1>
            <input type="text" placeholder="User Name" name="Username" required>
            <input type="password" placeholder="Password" name="Password" required id="PasswordField">
            <input type="submit" value="Log in">
            <a href="../php/RecoverPassword.php">Recover Password</a>
            <input type="checkbox" onclick="showPassword()"> Show Password
            <a href="../php/RequestAccess.php">Request Access</a>
            <p>If you want access to raw data you can request access.</p>
        </div><!-- container container-table -->
    </form> <!-- form login-submit.php-->
</div><!-- Login -->
    
<?php include("../html/bottom.html"); ?>
