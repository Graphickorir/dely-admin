<?php
require 'delydbcon.php';

$rando=rand(10000,99999);
$check=True;
while($check){
    $query = "SELECT * FROM delyorders WHERE Order_num = '$rando'";
    $result = $con->query($query);
    if(mysqli_num_rows($result)>0){
        $rando=rand(10000,99999);
    }
    else{
        $check=False;
    }
}


$recieve = $_POST['obj'];
$json = json_decode($recieve, true);

$ordernum = $rando;
$tname = $json[0]["User"];
$checkbal = $json[0]["Total"];
$total = ($json[0]["Total"])*-1;

$bal =  $con->prepare("SELECT SUM(Trans) FROM delytrans WHERE User_id = '$tname' ");
$bal->execute();
$bal->bind_result($getbal);

while ($bal->fetch()) {
    $buy=false;
    if ($getbal >= $checkbal) {
        $buy = true;
    }
}

$response = array();
if($buy){
    $trans = $con->prepare( "INSERT INTO delytrans (Order_num,User_id,Trans) 
        VALUES ('$ordernum','$tname','$total')" );
    if($trans->execute()){
        $orders = array();
        foreach ($json as $key => $val ) {
            $rest = $val['Part'];
            $part = $con->prepare("SELECT Id_part FROM delypartners WHERE Partner= '$rest'");
            $part->execute();
            $part->bind_result($id);

            while ($part->fetch()) {
                $temp = array();
                $temp['Order_num'] = $ordernum;
                $temp['User_id'] = $val['User'];
                $temp['Part_id'] = $id;
                $temp['Item_id'] = $val['Item'];
            }   array_push($orders, $temp);
        }

        for ($i=0 ; $i < count($orders) ; $i++) {
            $columns = implode(',',array_keys($orders[$i]));
            $values  = implode(',',array_values($orders[$i]));
            $stmt = $con->prepare("INSERT INTO delyorders ($columns) VALUES ($values)");
            $stmt->execute();
            $response["messo"] = 1;
        }
    }
}else {
    $response["messo"] = 0;
}

echo json_encode($response);
?>