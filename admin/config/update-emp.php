<?php
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $desig = mysqli_real_escape_string($link, $_REQUEST['desig']);

    $sql = "UPDATE employees SET desig='$desig' WHERE email='$email'";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
        echo '<script type="text/javascript">
                    window.onload = function () { alert("User Updated Successfully !!!"); }
            </script>';
        header("location: ../manage-emp.php");
        exit;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);

?>