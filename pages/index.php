<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php 
  require_once('../plantilla/head.php');

  $todos_noticias = $get_xml->reg_detail_xml("tipo", "noticia", 'noticias_eventos.xml', 9);

  $todos_evento = $get_xml->reg_detail_xml("tipo", "evento", 'noticias_eventos.xml', 9);

  $todos_slide = $get_xml->reg_detail_xml("importancia", "1", 'noticias_eventos.xml', 8);
  
  // echo "<pre>";
  // print_r($todos_slide);
  // echo "</pre>"

  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>

    <!-- Modal Structure -->
  <div id="banner_intro" class="modal">
    <div class="modal-content center">
      <h3>Inscripciones Abiertas 2018 - 1</h3>
      <a href="<?= URL_MASTER ?>/pages/admisiones.php"><img src="<?= URL_MASTER ?>/images/noticias_eventos/1511214856.jpg" width="100%"></a>
    </div>
  </div>
  <!-- FINAL MODAL -->

  <!-- CONTENIDO -->
  <div>
    <!-- SLIDER PRINCIPAL -->
    <div class="row">

      <div id="slider_main" class="largemargin" style="width: 1350px; height: 600px;">

    <?php
    $cont = 0;
    foreach ($todos_slide as $slide) {
      $url = URL_MASTER."/pages/publicaciones/".$slide->tipo."/".$slide->id;
      if ($slide->enlace != "") {
        $url = $slide->enlace;
      }
        ?>
        <div class="ls-slide" data-ls="duration:3000;transitionorigami:true;overflow:true;kenburnsscale:1.2;">
          <img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $slide->imagen; ?>" class="ls-bg">
          <a href="<?= $url ?>">
              <div class="ls-l div_info"></div>
          </a>
        </div>
        <?php
    }
    ?>

  </div>
</div>

<!-- ENLACES RAPIDOS - ATAJOS -->
<div class="row lnk_first">
  <div class="col m2 atajos_espacio"><br></div>

  <div class="col s3 m1">
    <a href="<?= URL_MASTER ?>/pages/admisiones/">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/admisiones_1.png" src="<?= URL_MASTER ?>/images/web/atajos/admisiones.png">
      <p>Admisiones</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="<?= URL_MASTER ?>/pages/financiacion.php">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/financiacion_1.png" src="<?= URL_MASTER ?>/images/web/atajos/financiacion.png">
      <p>Pagos y Financiación</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="<?= URL_MASTER ?>/pages/biblioteca.php">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/biblioteca_1.png" src="<?= URL_MASTER ?>/images/web/atajos/biblioteca.png">
      <p>Biblioteca</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="<?= URL_MASTER ?>/pages/centro_idiomas.php">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/centro_idiomas_1.png" src="<?= URL_MASTER ?>/images/web/atajos/centro_idiomas.png">
      <p>Centro de Idiomas</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="http://campusvirtualurepublicana.edu.co/">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/campus_1.png" src="<?= URL_MASTER ?>/images/web/atajos/campus.png">
      <p>Campus Virtual</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a target="_blank" href="http://ojs.urepublicana.edu.co/index.php/">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/revista_1.png" src="<?= URL_MASTER ?>/images/web/atajos/revista.png">
      <p>Revistas Republicana</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="<?= URL_MASTER ?>/pages/gaceta.php">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/gaceta_1.png" src="<?= URL_MASTER ?>/images/web/atajos/gaceta.png">
      <p>Gaceta</p>
    </a>
  </div>

  <div class="col s3 m1">
    <a href="libros.php">
      <img class="atajo" name="<?= URL_MASTER ?>/images/web/atajos/libro_1.png" src="<?= URL_MASTER ?>/images/web/atajos/libro.png">
      <p>Libros Electrónicos</p>
    </a>
  </div>
</div>

<!-- CONTENIDO -->
<div class="container">

  <!-- NOTICIAS -->
  <div class="row urep_divide">
    <h3 class="center-align" >Noticias</h3>

    <div id="cont_noticias" class="owl-carousel owl-theme">
      <?php
      $cont = 0;
      foreach ($todos_noticias as $noticia) {
        if ($cont < 9) {
          $cont++;
          ?>
          <div class="item noticia">
            <img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $noticia->imagen; ?>">
            <h5>
              <a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $noticia->tipo ?>/<?= $noticia->id ?>"><?= $noticia->titular; ?></a>
            </h5>
            <p>
              <?= $noticia->resumen; ?>
            </p>
            <a class="btn_leer" href="<?= URL_MASTER ?>/pages/publicaciones/<?= $noticia->tipo ?>/<?= $noticia->id ?>">Leer mas...</a>
          </div>
          <?php
        }
      }
      ?>
    </div>

    <center><a href="<?= URL_MASTER ?>/pages/publicaciones/noticia" ><h5 class="more_info"> <i class="material-icons">add_circle_outline</i> Ver todas las Noticias</h5></a></center>

  </div>

  <!-- EVENTOS -->
  <div class="row urep_divide">
    <h3 class="center-align" >Eventos</h3>

    <div id="cont_eventos" class="owl-carousel owl-theme">
      <?php
      $cont = 0;
      foreach ($todos_evento as $evento) {
        if ($cont < 9) {
          $cont++;
          ?>
          <div class="item noticia">
            <img src="<?= URL_MASTER ?>/images/noticias_eventos/<?= $evento->imagen; ?>">
            <h5>
              <a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $evento->tipo ?>/<?= $evento->id ?>"><?= $evento->titular; ?></a>
            </h5>
            <p>
              <?= $evento->resumen; ?>
            </p>
            <a class="btn_leer" href="<?= URL_MASTER ?>/pages/publicaciones/<?= $evento->tipo ?>/<?= $evento->id ?>">Leer mas...</a>
          </div>

          <?php
        }
      }
      ?>
    </div>

    <center><a href="<?= URL_MASTER ?>/pages/publicaciones/evento" ><h5 class="more_info"> <i class="material-icons">add_circle_outline</i> Ver todos los Eventos </h5></a></center>
  </div>
</div>
</div>


<?php require_once('../plantilla/footer.php'); ?>

<script>
  $(document).ready(function() {
    
    $("#banner_intro").modal('open');

    var owl = $('.owl-carousel');
    owl.owlCarousel({
      autoplayHoverPause: true,
      autoplay:true,
      autoplayTimeout:5000,
      autoplaySpeed: 2000,
      navSpeed: 2000,
      margin: 15,
      nav: true,
      loop: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>

</body>
</html>