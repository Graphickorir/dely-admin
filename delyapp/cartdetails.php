<?php
    require 'delydbcon.php';

    $User = $_POST['User'];

    $stmt = $con->prepare("SELECT delycompanies.Id_Co,delycompanies.Company, delycompanies.Address, delypaymethod.Method FROM delyusers INNER JOIN delycompanies ON delyusers.Company = delycompanies.Id_Co INNER JOIN delypaymethod ON delyusers.Payment = delypaymethod.Id_paymethod WHERE Username = '$User'");
    $stmt->execute();
    $stmt->bind_result($Coid,$Company,$Address,$Method);

    $response = array();
    $response["messo"] = 0;
    while($stmt->fetch()){
        $response = array();
        $response["messo"] = 1;
        $response["coid"] = $Coid;
        $response["Company"] = $Company;
        $response["Address"] = $Address;
        $response["Method"] = $Method;
    }
    echo json_encode($response);
?>