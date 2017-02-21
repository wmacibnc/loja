<?php include 'header.php'; 

$imagem = $_FILES["imagem"];
$descricao = $_POST["descricao"];
$ordem = $_POST["ordem"];
if(!empty($_POST["ativo"])){
	$ativo = 1;
}else{
	$ativo = 2;
}


if($imagem != NULL) { 
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$imagedata = file_get_contents($nomeFinal);
		$base64 = base64_encode($imagedata);

		$insert = "INSERT INTO CATEGORIA (DESCRICAO, ORDEM, ATIVO, IMAGEM_BASE_64) VALUES('$descricao','$ordem','$ativo','$base64')";
		mysqli_query($con,$insert) or die(mysqli_error($con));;
		unlink($nomeFinal);

		echo " <META http-equiv='refresh' content='1;URL=categoria.php'>";
		
	}
} 
else { 
	echo"Você não realizou o upload de forma satisfatória."; 
} 

include 'footer.php'; ?>