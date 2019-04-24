function showPassword(showPassCheckBox)
{
    var PasswordField = document.getElementById("LoginPassword");
    if(showPassCheckBox.checked)
    {
        PasswordField.type = "text";
    }else{
        PasswordField.type = "password";
    }
    return;
}
function validateLogin()
{
    //alert("test");
    var Username = document.getElementById("LoginUser").value;
    var Username = document.getElementById("LoginPassword").value;

    var loginSuccess = false;
    
    //Need SQL Database or text file that stores valid login information

    if(loginSuccess)
    {
        // Do we go to home page? Successful login page?
        window.location = "../php/FrontPage.php";
    }else{
        document.getElementById("loginError").innerHTML = "Incorrect Username or Password.";
    }
}