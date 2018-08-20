<?php
    require 'delydbcon.php';

    $num = $_POST['order'];

    $stmt = $con->prepare("SELECT delypartners.Partner,delyitems.Item_name,delyorders.dely FROM delyorders 
        INNER JOIN delypartners ON delyorders.Part_id = delypartners.Id_part 
        INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id WHERE Order_num = '$num'");
    $stmt->execute();
    $stmt->bind_result($part,$item,$dely);

    $response = array();
    while($stmt->fetch()){
        $temp = array();
        $temp["part"] = $part;
        $temp["item"] = $item;
        $temp["dely"] = $dely;

        array_push($response, $temp);
    }

    echo json_encode($response);
?>