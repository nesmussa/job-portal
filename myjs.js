function validate() {
    if (document.form1.company_name.value == "") {
        alert("Please Enter Your Company Name");
        document.form1.company_name.focus();
        return false;
    }
    else if(document.form1.comp_username.value == ""){
        alert("Please Enter Your Company User Name");
        document.form1.comp_username.focus();
        return false;
    }
    else if(document.form1.email.value = ""){
        alert("Please Enter an Email");
        document.form1.email.focus();
        return false;
    }
    else if(document.form1.po_number.value = ""){
        alert("Please Enter a phone number");
        document.form1.po_number.focus();
        return false;
    }
    else if(document.form1.password.value = ""){
        alert("Please Enter a password");
        document.form1.password.focus();
        return false;
    }
    else if(document.form1.C_password.value = ""){
        alert("Please Enter a Confirm password");
        document.form1.C_password.focus();
        return false;
    }
}