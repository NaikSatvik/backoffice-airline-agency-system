<?php
include '../update-flight-status.php';
    $link = mysqli_connect("localhost", "root", "", "AAMS");

    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    if ($flag === 1) {
        $flightid = mysqli_real_escape_string($link, $_REQUEST['f_id']);
        $reason = mysqli_real_escape_string($link, $_REQUEST['reason']);

        $sql = "UPDATE flights SET reason='$reason', stat = 0  WHERE flightid=$flightid";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
            echo '<script type="text/javascript">
                        window.onload = function () { alert("User Updated Successfully !!!"); }
                </script>';
            header("location: ../update-flight-status.php");
            exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        mysqli_close($link);

    } else {
        $flightid = mysqli_real_escape_string($link, $_REQUEST['f_id']);
        $src = mysqli_real_escape_string($link, $_REQUEST['src']);
        $des = mysqli_real_escape_string($link, $_REQUEST['des']);
        $reason = mysqli_real_escape_string($link, $_REQUEST['reason']);

        $sql = "UPDATE flights SET date_time_src='$src', date_time_des='$des', reason='$reason', stat = 1  WHERE flightid=$flightid";
        if(mysqli_query($link, $sql)){
            echo "Records added successfully.";
            echo '<script type="text/javascript">
                        window.onload = function () { alert("User Updated Successfully !!!"); }
                </script>';
            header("location: ../update-flight-status.php");
            exit;
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        mysqli_close($link);

    }

?>