<?php 
require 'delydbcon.php';

$coid = $_POST['coid'];

$stmt =$con->prepare("UPDATE delyorders SET Dely ='1' WHERE Order_id ='$coid'");

if ($stmt->execute()) {
	header('location: ../deliveries.php?msg=1');
}else{
	header('location: ../deliveries.php?msg=2');
}

?>