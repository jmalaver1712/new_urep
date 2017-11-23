<?php
  if (!isset($_GET['id'])){
    print('<meta http-equiv="refresh" content="0.1; url=<?= URL_MASTER ?>/pages/noticias_eventos.php" />');
    exit();
  }
?>
<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 

  $noticia_evento = $get_xml->reg_detail_xml("id" ,$_GET['id'] ,"noticias_eventos.xml", 1);
  $noticia_evento_galeria = $get_xml->reg_detail_xml("id_noticia_evento" ,$_GET['id'] ,"noticias_eventos_galeria.xml", null);

  ?>
</head>
<body id="body_urep">
<?php require_once('../plantilla/menu.php'); ?>
<div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/"> Inicio </a> > <a href="<?= URL_MASTER ?>/pages/noticias_eventos.php" >Publicaciones</a> > <a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $noticia_evento[0]->tipo ?>" ><?= $noticia_evento[0]->tipo ?></a> > <?= $noticia_evento[0]->titular ?></div>
  <!-- CONTENIDO -->
  <div class="container">
    <center>
      <h3><?= $noticia_evento[0]->titular ?></h3>
    </center>
    <div class="noticias_all">
      <div>
        <a><img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $noticia_evento[0]->imagen ?>"></a>
      </div>
      <div class="resumen_noticia" >
        <p>
          <?= $noticia_evento[0]->resumen ?>
        </p>
      </div>
    </div>

    <div class="row">
      <i class="legal" style="text-align: right; float: right !important;">
      <?php
      $date = new DateTime($noticia_evento[0]->fecha_publicacion);
      echo "Fecha de publicación: ".$date->format('d /M /Y');
      ?>
      </i>
      <p>
      <?= $noticia_evento[0]->noticia ?>
      </p>
    </div>

    <div class="row">
      <div class="col s12">
        <div id="cont_eventos" class="owl-carousel owl-theme">
          <?php
          foreach ($noticia_evento_galeria as $galeria) {
            if($galeria->tipo_galeria == "imagen"){
          ?>
            <div class="item">
              <img src="<?= URL_MASTER ?>/images/noticias_eventos/galeria/<?= $galeria->url_galeria ?>">
            </div>
          <?php
            }
            if($galeria->tipo_galeria == "video"){
          ?>
            <div class="item">
              <iframe width="100%" height="400" src="<?= $galeria->url_galeria ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          <?php
            }

          }
          ?>
        </div>
      </div>
    </div>

  </div>


<?php require_once('../plantilla/footer.php'); ?>

<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      autoplay:true,
      autoplayTimeout:5000,
      autoplaySpeed: 2000,
      autoplayHoverPause: true,
      navSpeed: 2000,
      margin: 15,
      nav: true,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>

</body>
</html>