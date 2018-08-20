<?php
    require 'delydbcon.php';

    $pass = $_POST['pass'];
    $user = $_POST['user'];

    $stmt = "UPDATE delyusers SET Password ='$pass' WHERE Username='$user'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
        $response["pass"] = $pass;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>