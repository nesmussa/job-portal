<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css_reg.css">
</head>
<body>
    <div class="container">
        <div class="title">Jobs Recommended For You</div>
        <form action="./php/register.php" method="post" name = "form1">
            <div class="user-details">
                <div class="input-box">
                    <table border = "1" width = "100%">
                        <tr>
                            <th nowrap = "">Company Name</th>
                            <th nowrap = "">Job ID</th>
                            <th nowrap = "">Job Name</th>
                            <th nowrap = "">Required Sex</th>
                            <th nowrap = "">Experience</th>
                            <th nowrap = "">Location</th>
                            <th nowrap = "">Apply</th>
                        </tr>
                        <?php
                            $servername = 'localhost';
                            $username = 'root';
                            $password = '';
                            $dbname = 'job_portal';
                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if (!$conn) {
                                die('Connection failed: '.mysqli_connect_error());
                            }
                            else {
                                $sql = "SELECT * FROM job";
                                $quer= mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($quer)) {
                                    $id = $row['Jobid'];
                                    echo "<tr><td>".$row['Cusername']."</td><td>".$id."</td><td>".$row['Jobname']."</td><td>".$row['Req_sex']."</td><td>".$row['Experience']."</td><td>".$row['Location']."</td><td><button><a href  = 'after_job_selection.php?applyid = ".$id."'>Apply</a></button></td></tr>";
                                }
                            }
                        ?>
                    </table>
                </div>
        </form>
    </div>
</body>
</html>