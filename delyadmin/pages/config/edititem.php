<?php 
require 'delydbcon.php';

$id = $_POST['id'];
$cat = $_POST['cat'];
$item = $_POST['item'];
$price = $_POST['price'];

$stmt =$con->prepare("UPDATE delyitems SET Item_cat='$cat', Item_name='$item', Item_price='$price' 
	WHERE Item_id ='$id'");

if ($stmt->execute()) {
	header('location: ../edit_menu.php?msg=1');
}else{
	header('location: ../edit_menu.php?msg=2');
}
?>