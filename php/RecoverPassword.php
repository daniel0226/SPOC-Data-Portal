<?php include("../html/top.html"); ?>
<form id="loginForm" enctype="multipart/form-data" method="POST" action="PasswordHandler.php">
    <div class = "container containerLogin">
        <div class ="row">
            <input type="text" id="UserName" placeholder="User Name" name="Username" required>
        </div>
        <div class ="row">
            <input type="text" id="Email" placeholder="Email" name="Email" required>
        </div>
        <div class ="row">
            <input type="submit" value="Submit">
        </div>
    </div><!-- container container-table -->
<?php include("../html/bottom.html"); ?>