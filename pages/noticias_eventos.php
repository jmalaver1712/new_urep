<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php');
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php');

  if (isset($_GET['id'])){
    $todos_regs = $get_xml->reg_detail_xml("tipo", $_GET['id'], 'noticias_eventos.xml', null);
    if($_GET['id'] == "evento"){
      $title = "Conoce todos los Eventos";
    }
    if($_GET['id'] == "noticia"){
      $title = "Conoce todas las Noticias";
    }
    ?>

    <div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/noticias_eventos.php" >Publicaciones</a> > <a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $_GET['id'] ?>" ><?= $_GET['id'] ?></a></div>
    <!-- CONTENIDO -->
    <div class="container">
      <div class="row">
        <center>
          <h3> <?= $title ?> </h3>
        </center>
        <?php
        foreach ($todos_regs as $reg) {
          ?>

          <div class="col s12 m6">

            <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
                <img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $reg->imagen; ?>" class="img_card activator">
              </div>
              <div class="card-content">
                <span class="activator grey-text text-darken-4"><?= $reg->titular; ?><i class="material-icons right">remove_red_eye</i></span>

                <p><a class="enlace" href="<?= URL_MASTER ?>/pages/publicaciones/<?= $reg->tipo ?>/<?= $reg->id ?>" >Leer mas...</a></p>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4"><?= $reg->titular; ?><i class="material-icons right">close</i></span>
                <p><?= $reg->resumen; ?></p>
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

    <div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/noticias_eventos.php">Noticias y Eventos</a></div>
    <!-- CONTENIDO -->
    <div class="container">
      <div class="row">
        <center>
          <h3> Conoce todas las Noticias y Eventos </h3>
        </center>

        <div class="col s12 m6">
          <div class="card horizontal">
            <div class="card-image">
              <img src="<?= URL_MASTER ?>/images/noticias_eventos/noticias.jpg" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>CONOCE TODAS LAS NOTICIAS</h5><br>
              </div>
              <div class="card-action">
                <a href="<?= URL_MASTER ?>/pages/publicaciones/noticia" >VER TODAS LAS NOTICIAS</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card horizontal">
            <div class="card-image">
              <img src="<?= URL_MASTER ?>/images/noticias_eventos/eventos.jpg" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <h5>CONOCE TODOS LOS EVENTOS</h5><br>
              </div>
              <div class="card-action">
                <a href="<?= URL_MASTER ?>/pages/publicaciones/evento" >VER TODAS LOS EVENTOS</a>
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