<?php
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $age = mysqli_real_escape_string($link, $_REQUEST['age']);
    $addr = mysqli_real_escape_string($link, $_REQUEST['addr']);
    $mob_no = mysqli_real_escape_string($link, $_REQUEST['mob_no']);


    $sql = "UPDATE employees SET age='$age', address='$addr', mobile_no='$mob_no' WHERE email='$email'";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
        echo '<script type="text/javascript">
                    window.onload = function () { alert("User Updated Successfully !!!"); }
            </script>';
        header("location: ../admin-profile.php");
        exit;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);

?>