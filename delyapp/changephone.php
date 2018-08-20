<?php
    require 'delydbcon.php';

    $phone = $_POST['phone'];
    $user = $_POST['user'];

    $stmt = "UPDATE delyusers SET Phone ='$phone' WHERE Username='$user'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
        $response["phone"] = $phone;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>