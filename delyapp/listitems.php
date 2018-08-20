<?php
    require 'delydbcon.php';

    $Partner = $_POST["Partner"];
    $Item_cat = $_POST["Item_cat"];

    $stmt = $con->prepare("SELECT Item_id,Item_name,Item_price FROM delyitems WHERE Partner = $Partner AND Item_cat = $Item_cat");
    
    $stmt->execute();
    $stmt->bind_result($Item_id,$Item_name,$Item_price);

    $response = array();

    while($stmt->fetch()){
        $temp = array();
        $temp["Item_id"] = $Item_id;
        $temp["Item_name"] = $Item_name;
        $temp["Item_price"] = $Item_price;
    array_push($response, $temp);
    }
    echo json_encode($response);
?>