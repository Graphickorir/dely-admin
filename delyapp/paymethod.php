<?php
    require 'delydbcon.php';

    $method = $_POST['method'];
    $Username = $_POST['Username'];

    $stmt = "UPDATE delyusers SET Payment ='$method' WHERE Username='$Username'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>