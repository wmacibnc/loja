<?php
include 'header.php';

$query = "DELETE FROM CATEGORIA ";
$filtro = " WHERE ID = ".$_GET["id"]."";
echo $query = $query.$filtro;

$sql = mysqli_query($con,$query) or die(mysqli_error($con));

sleep(1);

header("Location: categoria.php");
?>