<?php
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $pass1 = mysqli_real_escape_string($link, $_REQUEST['pass1']);
    $pass2 = mysqli_real_escape_string($link, $_REQUEST['pass2']);

    if ($pass1 === $pass2) {
        $sql = "UPDATE employees SET pass='$pass1' WHERE email='$email'";
        if(mysqli_query($link, $sql)){
            echo '<script type="text/javascript">
                        window.onload = function () { alert("User Updated Successfully !!!"); }
                </script>';
            header("location: login.php");
            exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    } else {
        echo "<div class='form'><h3>Password didn't matched.</h3><br/>Click here to <a href='update-pass.php'>Reset Again</a></div>";
    }
    mysqli_close($link);
?>