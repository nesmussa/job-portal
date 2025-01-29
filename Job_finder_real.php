<?php

$hostname = 'localhost';
$hostuser = 'root';
$hostpass = '';
$dbname = 'job_portal';
$conn = mysqli_connect($hostname, $hostuser, $hostpass, $dbname);
if (!$conn) {
    echo 'could not connect';
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job_Finder</title>
    <link rel="stylesheet" href="css_reg.css">
    
</head>
<body>
    <div class="container">
        <div class ="title"></div>
        <div class="title">Your Career'S Oppprtunity <br>Find the most exciting startup jobs</div>
        <form action="Job_Post_For_Users.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Job Title</span>
                    <select>
                        <?php
                            $localh = "localhost";
                            $uname = "root";
                            $pass = "";
                            $dbname = "job_portal";
                            $conn = mysqli_connect($localh, $uname, $pass, $dbname);
                            if (!$conn) {
                                die(mysqli_error());
                            }
                            else{
                                $sql = "SELECT DISTINCT Jobname FROM job";
                                $quer = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($quer)) {
                                    echo "<option value = '".$row['Jobname']."'>".$row['Jobname']."</option>";
                                }
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Experience</span>
                    <select>
                        <?php
                            $localh = "localhost";
                            $uname = "root";
                            $pass = "";
                            $dbname = "job_portal";
                            $conn = mysqli_connect($localh, $uname, $pass, $dbname);
                            if (!$conn) {
                                die(mysqli_error());
                            }
                            else{
                                $sql = "SELECT Experience FROM job";
                                $quer = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($quer)) {
                                    echo "<option value='".$row['Experience']."'>".$row['Experience']."</option>";
                                }
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="input-box">
                    <span class="details">Location</span>
                    <select>
                        <?php
                            $localh = "localhost";
                            $uname = "root";
                            $pass = "";
                            $dbname = "job_portal";
                            $conn = mysqli_connect($localh, $uname, $pass, $dbname);
                            if (!$conn) {
                                die(mysqli_error());
                            }
                            else{
                                $sql = "SELECT DISTINCT Location FROM job";
                                $quer = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($quer)) {
                                    echo "<option value='".$row['Experience']."'>".$row['Location']."</option>";
                                }
                            }
                        
                        ?>
                    </select>
                </div>    
            </div> 
        <div class="button">
            <input type="submit" name="submit" id="" value="Find">
        </div>  
        </form>
    </div>
</body>
</html>