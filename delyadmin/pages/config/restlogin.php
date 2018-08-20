<?php
require 'delydbcon.php';
session_start();
$rest = $_POST['rest'];
$pass = $_POST['restpass'];

$stmt = $con->prepare("SELECT Id_part,Partner FROM delypartners 
    WHERE Partner = '$rest' AND Password = '$pass' ");
$stmt->execute();
$stmt->bind_result($idpart,$part);
$stmt->store_result();
if($stmt->num_rows() >= 1){
    while ($stmt->fetch()) {
    	$_SESSION['partid'] = $idpart;
        $_SESSION['part'] = $part;
    }
    header("location: ../home.php");
}else{
    header("location: ../../index.php?msg=1");
}
?>