function checkPassword()
{
    if(document.getElementById("pwd").value != document.getElementById("cnfrmpwd").value)
    {
        alert("Password does not match.Try Again.");
        return false;
    }
    else
    {
        alert("Password correct.");
        return true;
    }
}

function enableButton()
{
    if(document.getElementById("checkbox").checked)
    {
        document.getElementById("submitBtn").disabled = false;
    }
    else
    {
        document.getElementById("submitBtn").disabled = true;
    }
}