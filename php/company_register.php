<?php
$hostname='localhost';
$hostuser='root';
$hostpass='';
$dbname='job_portal';
$conn=mysqli_connect($hostname,$hostuser,$hostpass,$dbname);
if(!$conn){
    echo 'could not connect';
}
else{
    if(isset($_POST['submit'])) {
        $cname = $_POST['company_name'];
        $cuname = $_POST['comp_username'];
        $email = $_POST['email'];
        $phone = $_POST['po_number'];
        $pas = $_POST['password'];

        $check = "SELECT * FROM company_info WHERE Cusername='$cuname'";
        $resu = mysqli_query($conn, $check);
        $a=mysqli_fetch_assoc($resu);
        $aa=$a['Cusername'];
        if( $aa!= $cuname){
            $sql = "INSERT INTO company_info(Cname,Cusername,Email,Phoneno,Password) 
              value ('$cname','$cuname','$email','$phone','$pas')";
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                die(mysqli_error());
            } else {
                echo "<script>
var choice = confirm('Successfully registered!!!');
var xhr = new XMLHttpRequest();
xhr.open('POST', '../Login.html', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhr.send('choice=' + choice);
if (choice) window.location.href = '../Login.html';
</script>";

        }}
        else {


                echo "<script>
var choice = confirm('The Username already exist');
var xhr = new XMLHttpRequest();
xhr.open('POST', 'employer_register.html', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhr.send('choice=' + choice);
if (choice) window.location.href = '../Company_reg.html';
</script>";

            }
        }


    }
