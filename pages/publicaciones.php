<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $todos_libros = $get_xml->registros_all_xml('libros.xml');
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>
  <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="publicaciones.php"> Publicaciones </a></div>
  <div class="container">
    <!--   Icon Section   -->
    <div class="row">
      <center>
        <h3> Conoce todas las Publicaciones </h3>
      </center>
      <div class="col s12 m4">
        <div class="card horizontal">
          <div class="card-image">
            <a class="enlace" href="<?= URL_MASTER ?>/pages/gaceta/" >
              <img src="<?= URL_MASTER ?>/images/web/atajos/gaceta.png" name="<?= URL_MASTER ?>/images/web/atajos/gaceta_1.png" class="img_card atajo">
            </a>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="titulo_card mayus">Gaceta</p>
            </div>
            <div class="card-action">
              <a class="enlace" href="<?= URL_MASTER ?>/pages/gaceta/" >Mas información</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card horizontal">
          <div class="card-image">
            <a class="enlace" target="_blank" href="http://ojs.urepublicana.edu.co/index.php/">
              <img src="<?= URL_MASTER ?>/images/web/atajos/revista.png" name="<?= URL_MASTER ?>/images/web/atajos/revista_1.png"  class="img_card atajo">
            </a>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="titulo_card mayus">Revistas Republicana</p>
            </div>
            <div class="card-action">
              <a class="enlace" target="_blank" href="http://ojs.urepublicana.edu.co/index.php/">Mas información</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col s12 m4">
        <div class="card horizontal">
          <div class="card-image">
            <a class="enlace" href="<?= URL_MASTER ?>/pages/libros.php" >
              <img src="<?= URL_MASTER ?>/images/web/atajos/libro.png" name="<?= URL_MASTER ?>/images/web/atajos/libro_1.png"  class="img_card atajo">
            </a>
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="titulo_card mayus">Libros Electrónicos</p>
            </div>
            <div class="card-action">
              <a class="enlace" href="<?= URL_MASTER ?>/pages/libros.php" >Mas información</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
  </div>
  <?php require_once('../plantilla/footer.php'); ?>
</body>
</html>