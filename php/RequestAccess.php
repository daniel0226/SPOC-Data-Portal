<?php include("../html/top.html"); ?>
<form id="loginForm" enctype="multipart/form-data" method="POST" action="RequestHandler.php">
    <div class = "container containerLogin">
        <div class ="row">
            <input type="text" id="Name" placeholder="Name" name="Name" required>
        </div>
        <div class ="row">
            <input type="text" id="Email" placeholder="Email" name="Email" required>
        </div>
        <div class ="row">
            <input type="submit" value="Request">
        </div>
    </div><!-- container container-table -->
<?php include("../html/bottom.html"); ?>