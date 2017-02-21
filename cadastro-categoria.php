<?php include 'header.php'; ?>

<div class="row">
    <div class="container">
        <ol class="breadcrumb">
          <li><a href="#">Cadastro</a></li>
          <li class="active">Categoria</li>
      </ol>   
  </div>
</div>


<!-- Page Content -->
<div class="container">

    <div class="row"> <br /> </div>

    <div class="row">


<div class="col-md-12 pull-left">
        <form  action="salvar-categoria.php"class="form-horizontal" method="POST" enctype="multipart/form-data">
            <fieldset>

                <!-- Form Name -->
                <legend>Cadastro de Categoria</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Descrição</label>  
                  <div class="col-md-4">
                      <input id="textinput" name="descricao" type="text" placeholder="Descrição da Categoria" class="form-control input-md">
                      <span class="help-block">Informe a descrição da Categoria</span>  
                  </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="textinput">Imagem</label>  
                  <div class="col-md-4">
                      <input id="textinput" name="imagem" type="file" placeholder="Imagem" class="form-control input-md">
                      <span class="help-block">Selecione a imagem da categoria</span>  
                  </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                  <label class="col-md-4 control-label" for="ordem">Ordem</label>
                  <div class="col-md-4">
                    <select id="ordem" name="ordem" class="form-control">
                     <?php
                        for($i = 1; $i < 10; $i++) {   
                          echo "<option value='".$i."'>".$i."</option>";
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
                      <input type="checkbox" name="ativo" id="ativo-0" value="1">
                      Sim
                  </label>
              </div>
          </div>
      </div>

<input type="submit" value="Enviar"/>

  </fieldset>
</form>
</div>

</div>


<?php include 'footer.php'; ?>