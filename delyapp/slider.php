<?php
    require 'delydbcon.php';

    $stmt = $con->prepare("SELECT Id_part,Partner,Slider FROM delypartners");
    $stmt->execute();
    $stmt->bind_result($Id_part,$Partner,$Slider);

    $response = array();

    while($stmt->fetch()){
        $temp = array();
        $temp["partid"] = $Id_part;
        $temp["part"] = $Partner;
        $temp["images"] = $Slider;

        array_push($response, $temp);
    }

    echo json_encode($response);
?>