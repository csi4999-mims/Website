//File Name: js-register.js
//Date Created: 1-14-2018
//Created By: Nicole Cox
//Start File

//function for editing account information
function EditInfo() {
    document.getElementById("f-name").readOnly = false;
    document.getElementById("l-name").readOnly = false;
    document.getElementById("email").readOnly = false;
    document.getElementById("password").readOnly = false;
}

//temp function for updating account info
//need to link to database to do updates
function UpdateInfo() {
    document.getElementById("f-name").readOnly = true;
    document.getElementById("l-name").readOnly = true;
    document.getElementById("email").readOnly = true;
    document.getElementById("password").readOnly = true;
}
