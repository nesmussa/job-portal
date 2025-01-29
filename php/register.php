<?php
$hostname='localhost';
$hostuser='root';
$hostpass='';
$dbname='job_portal';
$conn=mysqli_connect($hostname,$hostuser,$hostpass,$dbname);
if(!$conn){
    echo 'could not connect';
}

    if(isset($_POST['submit'])) {
        $fname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phoneno = $_POST['po_number'];
        $pass = $_POST['C_password'];
        $sex=$_POST['gender_1'];
        $check = "SELECT * FROM user WHERE Username='$username'";
        $resu = mysqli_query($conn, $check);
        $a=mysqli_fetch_assoc($resu);
        if($a['Username'] == $username){

            echo "<script>
var choice = confirm('The Username already exist');
var xhr = new XMLHttpRequest();
xhr.open('POST', '../Registeration_page.html', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhr.send('choice=' + choice);
if (choice) window.location.href = '../Registeration_page.html';
</script>";


        }
        else  {

            $sql = "INSERT INTO user(Username,Firstname,Email,Phone,Password,Sex)
              value ('$username','$fname','$email','$phoneno','$pass','$sex')";
            $res = mysqli_query($conn, $sql);
            if (!$res) {
                die(mysqli_error());
            }
            else{
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
            }


        }





}