<?php

    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
    $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
    $email = mysqli_real_escape_string($link, $_REQUEST['email']);
    $desig = mysqli_real_escape_string($link, $_REQUEST['desig']);

    $sql = "INSERT INTO employees (fname, lname, email, pass, desig) VALUES ('$first_name', '$last_name', '$email', 'AAMS', '$desig')";
    if(mysqli_query($link, $sql)){
        echo "Records added successfully.";
        echo '<script type="text/javascript">
                    window.onload = function () { alert("Account Created Successfully !!!"); }
            </script>';
        header("location: ../create-emp.php");
        exit;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);

?>