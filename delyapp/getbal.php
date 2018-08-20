<?php
require 'delydbcon.php';

$id = $_POST['id'];

$stmt = $con->prepare("SELECT delyusers.Username,(SUM(Trans)) FROM delytrans 
    INNER JOIN delyusers ON delytrans.User_id = delyusers.Id
    WHERE User_id = '$id' ");
$stmt->execute();
$stmt->bind_result($user,$bal);

$response = array();
while($stmt->fetch()){
    if ($user == null) {
        $response["messo"] = 2;
    }else{
        $response["messo"] = 1;
        $response["user"] = $user;
        $response["bal"] = $bal;
    }
}
echo json_encode($response);
?>