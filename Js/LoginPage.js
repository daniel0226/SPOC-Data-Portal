window.onload = function()
{

    var passwordRequest = document.getElementById("passwordLink");
    var accessRequest = document.getElementById("accessLink");
    var modalPW = document.getElementById("passwordModal");
    var modalRA = document.getElementById("accessModal");
    var closeModalPW = document.getElementById("closeModalPW");
    var closeModalRA = document.getElementById("closeModalRA");

    passwordRequest.onclick = function()
    {
        modalPW.style.display = "block";
    }
    accessRequest.onclick = function()
    {
        modalRA.style.display = "block";
    }
    closeModalPW.onclick = function()
    {
        modalPW.style.display = "none";
    }
    closeModalRA.onclick = function()
    {
        modalRA.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modalPW) 
        {
            modalPW.style.display = "none";
        }
        if (event.target == modalRA) 
        {
            modalRA.style.display = "none";
        }
    }
}

function accessModal()
{
    var accessRequest = document.getElementById("accessLink");
    var modal = document.getElementById("passwordModal");
    var closeModal = document.getElementById("closeModal");
    accessRequest.onclick = function()
    {
        modal.style.display = "block";
    }
}

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

/*
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
*/