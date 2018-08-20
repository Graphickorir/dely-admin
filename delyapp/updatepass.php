<?php
    require 'delydbcon.php';

    $pass = $_POST['pass'];
    $email = $_POST['email'];

    $stmt = "UPDATE delyusers SET Password ='$pass' WHERE Email='$email'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>