<?php
require 'delydbcon.php';

$idcount = $con->prepare("SELECT Id_part FROM delypartners");
$idcount->execute();
$idcount->bind_result($num);
$count = array();
while($idcount->fetch()){
        $count[] = $num;
    }

$response = array();
for ($i=1; $i <= count($count); $i++) { 
    $stmt = $con->prepare("SELECT delypartners.Id_part,delypartners.Partner,delypartners.Address,(AVG(partrating.Rating)),delypartners.Logo FROM delypartners INNER JOIN partrating ON Id_part = Partner_id WHERE Id_part = '$i' ");
    $stmt->execute();
    $stmt->bind_result($Id_part,$Partner,$Address,$Rating,$Logo);

    while($stmt->fetch()){
        $temp = array();
        $temp["Id_part"] = $Id_part;
        $temp["Partner"] = $Partner;
        $temp["Address"] = $Address;
        $temp["Rating"] = (round($Rating*2)/2);
        $temp["Logo"] = $Logo;

        array_push($response, $temp);
    }
}
echo json_encode($response);
?>