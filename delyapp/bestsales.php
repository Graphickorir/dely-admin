<?php
    require 'delydbcon.php';

    $stmt = $con->prepare("SELECT delyitems.Item_id,delyitems.Item_name,delyitems.Item_price,delypartners.Id_part,delypartners.Partner,delybestsales.Bestsales FROM delybestsales INNER JOIN delyitems ON delybestsales.Item = delyitems.Item_id 
        INNER JOIN delypartners ON delybestsales.Partner = delypartners.Id_part");
    $stmt->execute();
    $stmt->bind_result($Item_id,$Item_name,$Item_price,$Part_id,$Part,$Bestsales);

    $response = array();

    while($stmt->fetch()){
        $temp = array();
        $temp["Item_id"] = $Item_id;
        $temp["Item_name"] = $Item_name;
        $temp["Item_price"] = $Item_price;
        $temp["Part_id"] = $Part_id;
        $temp["part"] = $Part;
        $temp["best_sales"] = $Bestsales;

        array_push($response, $temp);
    }

    echo json_encode($response);
?>