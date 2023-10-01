<?php 

include('config.php');

$id = $_GET['id'];
mysqli_query($con,"DELETE FROM addcart WHERE id=$id");
header("location: cart.php");

?>