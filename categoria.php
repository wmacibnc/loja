<?php include 'header.php'; ?>



<form class="form-horizontal">
  <fieldset>
    <div class="container">
    <h2> Categorias </h2>
      <table class="table table-striped table-bordered" id="example">
	<thead>
	<tr>
		<td><b>Ordem</b></td>
		<td><b>Foto</b></td>
		<td><b>Nome</b></td>
		<td><b>Ativo</b></td>
	</tr>
	</thead>

	<tbody>
          <?php
          $query = "SELECT ORDEM, IMAGEM_BASE_64, DESCRICAO, ATIVO FROM CATEGORIA ORDER BY ORDEM, DESCRICAO";
          $result = $con->query($query);
          while($categoria = $result->fetch_array(MYSQLI_ASSOC)){

            echo "<tr>";
            echo "<td>".$categoria['ORDEM']."</td>";
            echo "<td><img width='50px'src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' /></td>";
            
            echo "<td>".$categoria['DESCRICAO']."</td>";
            echo "<td>".$categoria['ORDEM']."</td>";
            echo "</tr>";
          }
          ?>
	</tbody>
</table>

<?php include 'footer.php'; ?>
