<?php include 'header.php'; ?>

<div class="row">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Visualizar</a></li>
          <li class="active">Categoria</li>
      </ol>   
  </div>
</div>


<!-- Page Content -->
<div class="container">

    <div class="row"> <br /> </div>

    <div class="row">

     <?php 
     $query = "SELECT ID, ORDEM, IMAGEM_BASE_64, DESCRICAO, ATIVO FROM CATEGORIA ";
     $filtro = " WHERE ID = '".$_GET["id"]."'";
     $query = $query.$filtro;

     $result = $con->query($query);
     $categoria = $result->fetch_array(MYSQLI_ASSOC);
   
   ?>
<div class="col-md-12 pull-left">
        <form  action="salvar-categoria.php"class="form-horizontal" method="POST" enctype="multipart/form-data">
            <fieldset>

                <!-- Form Name -->
                <legend>Visualização de Categoria</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Descrição</label>  
                  <div class="col-md-4">
                      <input id="textinput" disabled name="descricao" type="text" placeholder="Descrição da Categoria" class="form-control input-md" value="<?php echo $categoria['DESCRICAO']; ?>">
                  </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Imagem</label>  
                  <div class="col-md-4">
                  <?php
                      echo "<img width='50px'src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' />";
                      ?>
                  </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="ordem">Ordem</label>
                  <div class="col-md-4">
                    <select id="ordem" name="ordem" class="form-control" disabled="true">
                     <?php
                        for($i = 1; $i < 10; $i++) {
                          echo "<option value='".$i."' ";
                          if($categoria['ORDEM'] == $i){
                           echo " selected "; 
                          }
                          echo ">".$i."</option>";
                        }
                      ?>
                    </select>
              </div>
          </div>

          <!-- Multiple Checkboxes -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="ativo">Ativo</label>
              <div class="col-md-4">
                  <div class="checkbox">
                    <label for="ativo-0">
                      <input 
                      <?php 
                      if($categoria['ATIVO'] == 1){
                        echo "checked";
                      }
                       ?>
                      }
                      disabled="true"  type="checkbox" name="ativo" id="ativo-0" value="1">
                      Sim
                  </label>
              </div>
          </div>
      </div>

<input type="button" class="btn btn-sucess" value="Voltar" onClick="history.go(-1)">

  </fieldset>
</form>
</div>

</div>


<?php include 'footer.php'; ?>