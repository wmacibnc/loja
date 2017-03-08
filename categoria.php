<?php include 'header.php'; ?>



<div class="container">
  <div id="top" class="row">
    <div class="col-md-3">
      <h2>Categorias</h2>
    </div>

    <form action="categoria.php" method="GET" >
      <div class="col-md-6">
        <div class="input-group h2">

          <input name="descricao" class="form-control" id="search" type="text" placeholder="Pesquisar Categorias" 
          <?php 
          if(!empty($_GET["descricao"])){
            echo "value='".$_GET["descricao"]."'";
          }
          ?>
          >
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>

        </div>
      </div>
    </form>

    <div class="col-md-3">
      <a href="cadastro-categoria.php" class="btn btn-primary pull-right h2">Nova Categoria</a>
    </div>
  </div>
</div>

<form class="form-horizontal">
  <fieldset>
    <div class="container">
      <table class="table table-striped table-bordered" id="example">
       <thead>
         <tr>
          <td><b>Ordem</b></td>
          <td><b>Foto</b></td>
          <td><b>Nome</b></td>
          <td><b>Ativo</b></td>
          <td><b>Ação</b></td>
        </tr>
      </thead>

      <tbody>
        <?php
        $query = "SELECT ID, ORDEM, IMAGEM_BASE_64, DESCRICAO, ATIVO FROM CATEGORIA ";

        if(!empty($_GET["descricao"])){
          $filtro = " WHERE DESCRICAO LIKE '%".$_GET["descricao"]."%' ";
          $query = $query.$filtro;
        }

        $ordemBy = " ORDER BY ORDEM, DESCRICAO ";
        $query = $query.$ordemBy;

        $result = $con->query($query);
        while($categoria = $result->fetch_array(MYSQLI_ASSOC)){

          echo "<tr>";
          echo "<td>".$categoria['ORDEM']."</td>";
          echo "<td><img width='50px'src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' /></td>";

          echo "<td>".$categoria['DESCRICAO']."</td>";
          echo "<td>".$categoria['ORDEM']."</td>";



          echo "<td> <div class='btn-group'><a class='btn btn-danger'  href='#' data-toggle='modal' data-target='#delete-modal' data-customer='".$categoria['ID']."'>Excluir</a></div>";


          echo " <div class='btn-group'><a class='btn btn-warning'  href='editar-categoria.php?id=".$categoria['ID']."'>Alterar</a></div>";

          echo " <div class='btn-group'><a class='btn btn-info'  href='visualizar-categoria.php?id=".$categoria['ID']."'>Visualizar</a></div></td>";


          echo "</tr>";
        }
        ?>
      </tbody>
    </table>

    <?php include 'footer.php'; ?>

<!-- Modal DELETE -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Categoria</h4>
      </div>
      <div class="modal-body">Deseja realmente excluir este item? </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancelar" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

// Função da exclusão - Modal
$(document).ready(function () {
  /**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
 $('#delete-modal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var id = button.data('customer');
  var modal = $(this);
  modal.find('#confirm').attr('href', 'excluir-categoria.php?id=' + id);
})

});
</script>