<?php

$hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'job_portal';
$conn = mysqli_connect($hostname, $hostuser, $hostpass, $dbname);
if (!$conn) {
    echo 'could not connect';
}
else{
    if(isset($_POST['submit'])){
        $un=$_POST['username'];
        $ps=$_POST['password'];
        $logas=$_POST['loginas'];
        if($logas=='employee'){
            $sqlu="SELECT * FROM user WHERE Username='$un'";
            $res1=mysqli_query($conn,$sqlu);
            $resu1=mysqli_fetch_assoc($res1);
            if($resu1['Username']==$un){
                $sqlp="SELECT Password FROM user WHERE Username='$un'";
                $res2=mysqli_query($conn,$sqlp);
                $resu2=mysqli_fetch_assoc($res2);
                if($resu2['Password']==$ps){
                    header( 'location:../Job_finder_real.html');
                }
                else{
                    echo "<script>
var choice = confirm('You have entered wrong password');
var xhr = new XMLHttpRequest();
xhr.open('POST', 'Login.html', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhr.send('choice=' + choice);
if (choice) window.location.href = 'Login.html';
</script>";
                }}
                else{
                    echo "<script>
var choice = confirm('There is no account with this user name creat one');
var xhr = new XMLHttpRequest();
xhr.open('POST', 'Login.html', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    console.log(this.responseText);
  }
};
xhr.send('choice=' + choice);
if (choice) window.location.href = 'Login.html';
</script>";
                }
            }

        if($logas=='employer'){
            $sqlcu="SELECT * FROM company_info WHERE Cusername='$un'";

            $res4=mysqli_query($conn,$sqlcu);
            $resu4=mysqli_fetch_assoc($res4);
            if($resu4['Cusername']==$un){
                $sqlcp="SELECT Password FROM company_info WHERE Cusername='$un'";
                $res3=mysqli_query($conn,$sqlcp);
                $resu3=mysqli_fetch_assoc($res3);
                if($resu3['Password']==$ps){
                    session_start();
                    $_SESSION['cusername'] = $resu4['Cusername'];
                    header( 'location:../Job_finder_real.html');
                }
                else{
                    echo "<script>
var choice = confirm('You have entered wrong password');
var xhr = new XMLHttpRequest();
xhr.open('POST', 'Login.html', true);
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
            else{
                echo "<script>
var choice = confirm('There is no account with this user name creat one');
var xhr = new XMLHttpRequest();
xhr.open('POST', 'Login.html', true);
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




}

