<?php
include('config.php');

$id = $_GET['id'];
mysqli_query($con,"DELETE FROM shopproduct WHERE id = '$id'");

header('location:products.php');

?>