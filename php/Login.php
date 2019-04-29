
<?php include("../html/top.html"); ?>
<form id="loginForm" enctype="multipart/form-data" method="POST" action="Login-Submit.php">
    <div class = "container containerLogin">
        <div class="row">
            <h1><strong>Log in</strong></h1>
        </div>
        <div class ="row">
            <input type="text" id="LoginUser" placeholder="User Name" name="Username" required>
        </div>
        <div class ="row">
            <input type="password" id="LoginPassword" placeholder="Password" name="Password" required>
        </div>
        <div class ="row">
            <input type="submit" value="Log in">
        </div>
        <div class ="row">
            <a href="../php/RecoverPassword.php">Recover Password</a>
            <input type="checkbox" onclick="showPassword(this)">
            <p class="floatRight">Show Password</p>
        </div>
        <div class ="row">
            <a href="../php/RequestAccess.php">Request Access</a>
        </div>
        <div class ="row">
            <p>If you want access to raw data you can request access.</p>
        </div>
    </div><!-- container container-table -->
<?php include("../html/bottom.html"); ?>
