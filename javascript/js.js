function validate() {
    if (document.form1.password.value != document.form1.C_password.value) {
        alert('You have entered different password');
        document.form1.C_password.focus();
        return false;
    }
    else if (document.form1.po_number.value >14) {
      alert('Not valid Phone Number');
        document.form1.po_number.focus();
        return false;
    }
    else if(document.form1.fullname.value == double){
        alert("Not valid UserName")
    }
}