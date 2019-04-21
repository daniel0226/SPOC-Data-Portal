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
    return;
}