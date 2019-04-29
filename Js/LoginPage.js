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
    
    //Connect to MySql B

    if(loginSuccess)
    {
        window.location = "../php/Login-Submit.php";
    }else{
        document.getElementById("loginError").innerHTML = "Incorrect Username or Password.";
    }
}