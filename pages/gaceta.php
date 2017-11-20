<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $todos_gaceta = $get_xml->registros_all_xml('gaceta.xml');
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>
  <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="gaceta.php"> Gaceta Republicana </a></div>

  <div class="container">
    <div class="section">
      <div class="row">
       <h3 class="center">Gaceta Republicana</h3>
    </div>

    <!--   Icon Section   -->
    <div class="row" data-filter="true">
      <?php

      foreach ($todos_gaceta as $gaceta) {
        ?>

        <div class="col s12 m6">

          <div class="card horizontal">
            <div class="card-image">
              <img src="../images/web/libros_gaceta/gaceta_all.png" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p class="titulo_card">Gaceta Republicana N <?= $gaceta->version ?></p>
                <p class="autor_card"><b>Fecha</b>
                  <?= $gaceta->fecha ?>
                </p>
                <p class="autor_card">
                  <?= $gaceta->descripcion ?>
                </p>
              </div>
              <div class="card-action">
                <a target="_blank" href="../images/gaceta/<?= $gaceta->archivo ?>" download="gaceta_<?= $gaceta->version ?>.pdf" class="enlace">Descargar</a>
              </div>
            </div>
          </div>

        </div>
        <?php
      }
      ?>
    </div>

  </div>
  <br><br>
</div>

<?php require_once('../plantilla/footer.php'); ?>
<script type="text/javascript">

  $(document).ready(function () {
    $('#libros_search').keyup(function () {
      var rex = new RegExp($(this).val(), 'i');
      $('.elements .horizontal').hide();
      $('.elements .horizontal').filter(function () {
        return rex.test($(this).text());
      }).show();
    })
  });

</script>
</body>
</html>