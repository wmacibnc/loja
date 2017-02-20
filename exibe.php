<?php include 'header.php'; 

//header("Content-type:  ");

//EXECUTA A QUERY 
$sql = mysqli_query($con, "SELECT *
FROM CATEGORIA where id = 5 ");

echo "<h2>Exibe imagens cadastradas no BD</h2>";

while ($row = mysqli_fetch_row($sql)){ 
  $id = $row[0]; 
  $bytes = $row[2]; 
  echo "<img src='".$bytes.".png>";
  echo "<br><br>";
}

?>