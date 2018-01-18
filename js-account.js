//File Name: js-account.js
//Date Created: 1-1782018
//Created By: Nicole Cox
//Start File

//function for editing account information
function EditInfo() {
    document.getElementById("fname").readOnly = false;
    document.getElementById("lname").readOnly = false;
    document.getElementById("email").readOnly = false;
    document.getElementById("phone").readOnly = false;
}

//temp function for updating account info
//need to link to database to do updates
function UpdateInfo() {
    document.getElementById("fname").readOnly = true;
    document.getElementById("lname").readOnly = true;
    document.getElementById("email").readOnly = true;
    document.getElementById("phone").readOnly = true;
}
