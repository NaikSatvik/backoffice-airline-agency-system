<?php
session_start();
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $flightid = mysqli_real_escape_string($link, $_REQUEST['f_id']);
    $src = mysqli_real_escape_string($link, $_REQUEST['src']);
    $des = mysqli_real_escape_string($link, $_REQUEST['des']);
    $reason = mysqli_real_escape_string($link, $_REQUEST['reason']);

    $sql = "UPDATE flights SET reason='$reason', date_time_src='$src', date_time_des='$des', stat = 1 WHERE flightid=$flightid";
    if(mysqli_query($link, $sql)){
        header("location: ../update-flight-status.php");
        exit;
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>