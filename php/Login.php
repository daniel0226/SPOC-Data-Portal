
<?php include("../html/top.html"); ?>
<div>
    <form action="login-submit.php" method="get" enctype="multipart/form-data" class="login">
        <div class = "container containerLogin">
            <div class="row">
                <h1><strong>Log in</strong></h1>
            </div>
            <div class ="row">
                <input type="text" placeholder="User Name" name="Username" required>
            </div>
            <div class ="row">
                <input type="password" placeholder="Password" name="Password" required id="PasswordField">
            </div>
            <div class ="row">
                <input type="submit" value="Log in">
            </div>
            <div class ="row">
                <a href="../php/RecoverPassword.php">Recover Password</a>
                <input type="checkbox" onclick="showPassword()">
                <p class="floatRight">Show Password</p>
            </div>
            <div class ="row">
                <a href="../php/RequestAccess.php">Request Access</a>
            </div>
            <div class ="row">
                <p>If you want access to raw data you can request access.</p>
            </div>
        </div><!-- container container-table -->
    </form> <!-- form login-submit.php-->
</div><!-- Login -->
    
<?php include("../html/bottom.html"); ?>
