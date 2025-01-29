<?php
    $localh = "localhost";
    $uname = "root";
    $pass = "";
    $dbname = "job_portal";
    $conn = mysqli_connect($localh, $uname, $pass, $dbname);
    if (!$conn) {
        die(mysqli_error());
    }
    if (isset($_POST['submit'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $uname = $_POST['username'];
        $email = $_POST['email'];
        $ponu = $_POST['po_no'];
        $bd= $_POST['bdh'];
        $cv = $_POST['CV_'];
        $sql = "INSERT INTO after_job_selection_for_m(fname, lname, uname, email, phone_no, birthday, cv) VALUES ('$fname','$lname','$uname','$email','$ponu','$bd','$cv')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die(mysqli_error());
        }
        else{
           header('location: ../waiting.html');
            }

    }
?>