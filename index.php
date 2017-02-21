<?php include 'header.php'; ?>

        <div class="row">
            <div class="container">
                <ol class="breadcrumb">
                  <li><a href="#">Ínicio</a></li>
                  <li class="active">Abajus</li>
              </ol>   
          </div>

      </div>




      <!-- Page Content -->
      <div class="container">



        <div class="row"> <br />
        </div>
        <div class="row">

            <div class="col-md-12">

                <div class="col-md-3 thumb">
                    <div class="row">
                        <div class="col-md-12 thumb">
                        <?php 
                          $query = "SELECT * FROM CATEGORIA WHERE ORDEM = 1 LIMIT 1 ";
                           $result = $con->query($query);
                            $categoria = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<img src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' class='img-responsive'>";
                        ?>
                            <!-- <img  src="http://placehold.it/400x250/FCBA4C" alt=""> -->
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 thumb">
                        <?php 
                          $query = "SELECT * FROM CATEGORIA WHERE ORDEM = 2 LIMIT 1 ";
                           $result = $con->query($query);
                            $categoria = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<img src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' class='img-responsive'>";
                        ?>
                            <!-- <img class="img-responsive" src="http://placehold.it/400x250/FCBA4C" alt=""> -->
                        </div>
                    </div>
                </div>
                

                <div class="col-md-6 thumb">
                    <div class="row">
                        <div class="col-md-12 thumb">
                         <?php 
                          $query = "SELECT * FROM CATEGORIA WHERE ORDEM = 3 LIMIT 1 ";
                           $result = $con->query($query);
                            $categoria = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<img src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' class='img-responsive'>";
                        ?>
                            <!-- <img class="img-responsive" src="http://placehold.it/800x520/EA5690" alt="">  </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 thumb">
                        <div class="row">
                            <div class="col-md-12 thumb">
                             <?php 
                          $query = "SELECT * FROM CATEGORIA WHERE ORDEM = 4 LIMIT 1 ";
                           $result = $con->query($query);
                            $categoria = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<img src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' class='img-responsive'>";
                        ?>
                                <!-- <img class="img-responsive" src="http://placehold.it/400x250/45BFE8" alt=""> -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12 thumb">
                             <?php 
                          $query = "SELECT * FROM CATEGORIA WHERE ORDEM = 5 LIMIT 1 ";
                           $result = $con->query($query);
                            $categoria = $result->fetch_array(MYSQLI_ASSOC);
                            echo "<img src='data:image/png;base64,".$categoria['IMAGEM_BASE_64']."' class='img-responsive'>";
                        ?>
                                <!-- <img class="img-responsive" src="http://placehold.it/400x250/45BFE8" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-3 thumb">
                        <img class="img-responsive" src="http://placehold.it/400x300/39B04C" alt="">
                    </div>
                    <div class="col-md-3 thumb">
                        <img class="img-responsive" src="http://placehold.it/400x300/9B66AC" alt="">
                    </div>
                    <div class="col-md-3 thumb">
                        <img class="img-responsive" src="http://placehold.it/400x300/FCBA4C" alt="">
                    </div>
                    <div class="col-md-3 thumb">
                        <img class="img-responsive" src="http://placehold.it/400x300/EA5690" alt="">
                    </div>
                </div>
            </div>

            
<?php include 'footer.php'; ?>