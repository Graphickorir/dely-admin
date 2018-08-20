<?php
    require 'delydbcon.php';

    $Id_Co = $_POST['Id_Co'];
    $Username = $_POST['Username'];

    $stmt = "UPDATE delyusers SET Company ='$Id_Co' WHERE Username='$Username'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>