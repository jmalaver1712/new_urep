<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php');
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php');

  if (isset($_POST['id'])){

    $todos_programas = $get_xml->reg_detail_xml("nivel_academico", $_POST['id'], 'programas.xml', null);
    if($_POST['id'] == "Profesional"){
      $title = "Programas de Pregrado";
    }
    if($_POST['id'] == "Posgrado"){
      $title = "Programas de Posgrado";
    }
    ?>
    <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="programas.php">Programas</a> > <a href="programas.php?id=<?= $_POST['id'] ?>"><?= $_POST['id'] ?></a></div>
    <!-- CONTENIDO -->
    <div class="container">
      <div class="row">
        <center>
          <h3> <?= $title ?> </h3>
        </center>
        <!--   PROGRAMAS   -->
        <?php
        foreach ($todos_programas as $programa) {
          ?>
          <div class="col s12 m6">
            <div class="card horizontal">
              <div class="card-image">
                <img src="../images/programas/<?= $programa->snies ?>.jpg" class="img_card">
              </div>
              <div class="card-stacked">
                <div class="card-content">
                  <h6 style="font-size: 1.2em;"><?= $programa->nombre_programa ?></h6><br>
                  <p class="autor_card"><b>Snies: </b><?= $programa->snies ?></p>
                  <p class="autor_card"><b>Nivel Académico: </b><?= $programa->nivel_academico ?></p>
                  <p class="autor_card"><b>Modalidad: </b><?= $programa->modalidad ?></p>
                </div>
                <div class="card-action">
                  <a class="post_variable enlace" title="../programas/" name="<?= $programa->snies ?>" href="#!">Mas información</a>
                  <!-- <a href="detalle_programa.php?id=<?= $programa->snies ?>" class="enlace">Mas información</a> -->
                </div>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
    <?php
  }
  else{
    ?>
    <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="programas.php">Programas</a> ></div>
    <!-- CONTENIDO -->
    <div class="container">
      <div class="row">
        <center>
          <h3> Conoce todos las Programas</h3>
        </center>

        <div class="col s12 m6">
          <div class="card horizontal">
            <div class="card-image">
              <img src="../images/programas/pregrado.jpg" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>PROGRAMAS DE PREGRADO</h5><br>
              </div>
              <div class="card-action">
                <a class="post_variable enlace" title="programas.php" name="Profesional" href="#!">VER TODOS LOS PROGRAMAS</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card horizontal">
            <div class="card-image">
              <img src="../images/programas/posgrado.jpg" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>PROGRAMAS DE POSGRADO</h5><br>
              </div>
              <div class="card-action">
                <a class="post_variable enlace" title="programas.php" name="Posgrado" href="#!">VER TODOS LOS PROGRAMAS</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <?php
  }
  ?>
  



  
  <?php require_once('../plantilla/footer.php'); ?>

</body>
</html>