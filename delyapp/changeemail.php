<?php
    require 'delydbcon.php';

    $email = $_POST['email'];
    $user = $_POST['user'];

    $stmt = "UPDATE delyusers SET Email ='$email' WHERE Username='$user'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
        $response["email"] = $email;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>