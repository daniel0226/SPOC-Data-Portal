
<?php include("../html/top.html"); ?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/modal.css" />
</head>
<body>
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
        </div>
    </form>
    <div class = "container containerLogin">
        <div class ="row">
            <a href="#" id="passwordLink">Recover Password</a>
            <!-- The modal -->
            <div id="passwordModal" class="modal">
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST" action="PasswordHandler.php">
                        <div class = "container modalForm">
                            <div>
                                <h1>Recover Password</h1>
                                <p> If you have a valid account with SPOC, your request
                                    will be sent to an Administrator. You will receive your
                                    password via email.
                                </p>
                            </div>
                            <div class ="row">
                                <input type="text" id="UserName" placeholder="User Name" name="Username" required>
                            </div>
                            <div class ="row">
                                <input type="text" id="Email" placeholder="Email" name="Email" required>
                            </div>
                            <div class ="row">
                                <div class="col-sm-6">
                                    <input type="submit" value="Submit">
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" id = "closeModalPW">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <input type="checkbox" onclick="showPassword(this)">
            <p class="floatRight">Show Password</p>
        </div><!-- Recover Password -->

        <div class ="row">
            <a href="#" id="accessLink">Request Access</a>
            <!-- The modal -->
            <div id="accessModal" class="modal">
                <div class="modal-body">
                    <form enctype="multipart/form-data" method="POST" action="RequestHandler.php">
                        <div class = "container modalForm">
                            <div>
                                <h1>Request Access</h1>
                                <p> Please enter your full name and e-mail. Your request will
                                    be sent to a SPOC administrator and you will receive acess
                                    upon approval.
                                </p>
                            </div>
                            <div class ="row">
                                <input type="text" id="FullName" placeholder="Full name" name="FullName" required>
                            </div>
                            <div class ="row">
                                <input type="text" id="Email" placeholder="Email" name="Email" required>
                            </div>
                            <div class ="row">
                                <div class="col-sm-6">
                                    <input type="submit" value="Submit">
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" id = "closeModalRA">Close</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- Request Access -->
        <div class ="row">
            <p>If you want access to raw data you can request access.</p>
        </div>
    </div>
</body>
<?php include("../html/bottom.html"); ?>
