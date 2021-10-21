<?php
session_start();
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $flightid = mysqli_real_escape_string($link, $_REQUEST['f_id']);

    $sql = "UPDATE flights SET stat = 0 WHERE flightid=$flightid";
    
    if(mysqli_query($link, $sql)){
        header("location: ../update-flight-status.php");
        exit;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>