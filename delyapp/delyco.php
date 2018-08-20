<?php
    require 'delydbcon.php';

    $stmt = $con->prepare("SELECT Id_Co,Company,Address,Co_logo FROM delycompanies");
    $stmt->execute();
    $stmt->bind_result($Id_Co,$Company, $Address,$Co_logo);

    $response = array();

    while($stmt->fetch()){
        $temp = array();
        $temp["Id_Co"] = $Id_Co;
        $temp["Company"] = $Company;
        $temp["Address"] = $Address;
        $temp["co_logo"] = $Co_logo;

        array_push($response, $temp);
    }

    echo json_encode($response);
?>