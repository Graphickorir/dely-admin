<?php
require 'delydbcon.php';

$id = $_POST['id'];
$cat = $_POST['cat'];
$item = $_POST['item'];
$price = $_POST['price'];

$stmt = $con->prepare( "INSERT INTO delyitems (Partner,Item_cat,Item_name,Item_price) 
	VALUES ('$id','$cat','$item','$price')" );

if ($stmt->execute()) {
	header('location: ../edit_menu.php?msg=1');
}else{
	header('location: ../edit_menu.php?msg=2');
}
?>