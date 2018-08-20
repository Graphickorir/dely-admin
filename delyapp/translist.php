<?php
require 'delydbcon.php';
$userid = $_POST['userid'];

$stmt = $con->prepare("SELECT Trans_id,Order_num,Trans,Trans_date FROM delytrans  WHERE User_id = '$userid' ");
$stmt->execute();
$stmt->bind_result($Trans_id,$Order_num,$Trans,$Trans_date);
$stmt->store_result();

$Balance = $con->prepare("SELECT SUM(Trans) FROM delytrans  WHERE User_id = '$userid'");
$Balance->execute();
$Balance->bind_result($result);
while ($Balance->fetch()) {
    $bal = $result;
}
$response = array();
if(($stmt->num_rows)>=1){
    while($stmt->fetch()){
            $temp = array();
            $temp["messo"] = 1;
            $temp["Trans_id"] = $Trans_id;
            $temp["Order_num"] = $Order_num;
            $temp["Trans"] = $Trans;
            $temp["Trans_date"] = $Trans_date;
            $temp["Bal"] = $bal;
            array_push($response, $temp);
    }
}else{
    $another = array();
    $another["messo"] = 2;
    array_push($response, $another);
}
echo json_encode($response);
?>