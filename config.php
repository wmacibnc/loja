<?php
$servidor = "localhost";
$login = "root";
$senha = "root";
$base = "loja";
$con = mysqli_connect($servidor,$login, $senha) or die("MySql Error!");
mysqli_select_db($con, $base) or die("Database Error!"); 
?>