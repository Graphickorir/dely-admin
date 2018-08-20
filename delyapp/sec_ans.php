<?php
    require 'delydbcon.php';

    $secans = $_POST['secans'];
    $secque = $_POST['secque'];
    $Username = $_POST['Username'];

    $stmt = "UPDATE delyusers SET Secans ='$secans',  Secque = '$secque' WHERE Username='$Username'";

    if (mysqli_query($con, $stmt)) {
        $response = array();
        $response["messo"] = 1;
    } else {
        $response = array();
        $response["messo"] = 2;
    }

    echo json_encode($response);
?>