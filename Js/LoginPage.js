function showPassword()
{
    var PasswordField = document.getElementById("PasswordField");
    if(PasswordField.type == "password")
    {
        PasswordField.type = "text";
    }
    else
    {
        PasswordField.type = "password";
    }
}
function validateLogin()
{
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