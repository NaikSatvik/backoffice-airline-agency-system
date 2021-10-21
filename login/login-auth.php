<?php
    session_start();
    $con = mysqli_connect("localhost", "root", "", "AAMS");

    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $desig = mysqli_real_escape_string($con, $_REQUEST['desig']);
    $email = mysqli_real_escape_string($con, $_REQUEST['email']);
    $pass = mysqli_real_escape_string($con, $_REQUEST['pass']);

    $query = "SELECT * FROM `employees` WHERE email='$email' and desig='$desig' and pass='$pass'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
    if($rows === 1) {
        if ($pass === 'AAMS') {
            $_SESSION['email'] = $email;
            header("Location: update-pass.php");
            exit;
        }
        $qry1 = "SELECT * FROM `employees` WHERE age IS NULL and email='$email'";
        $res1 = mysqli_query($con,$qry1) or die(mysqli_error());
        $row = mysqli_num_rows($res1);
        if($row === 1) {
            if($desig === 'hoe' or $desig === 'admin') {
                $_SESSION['email'] = $email;
                header("Location: ../profile/admin-profile.php");
                exit;
            }
        } elseif($row === 0) {
            if($desig === 'admin') {
                $_SESSION['email'] = $email;
                header("Location: ../admin/create-emp.php");
                exit;
            } elseif($desig === 'hoe') {
                $_SESSION['email'] = $email;
                header("Location: ../hoe/update-flight-status.php");
                exit;
            }
        }
    }else{
    echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
    echo $rows;
    }
    mysqli_close($con);
?>