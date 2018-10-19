<?php
session_start();
$tab_id=$_SESSION['tab_id'];
$product=$_SESSION['PRODUCT'];

header('Location:retail-packages.php?cPath=262&products_id='.$product.'#'.$tab_id.'');
?>