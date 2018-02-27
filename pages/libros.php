<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $todos_libros = $get_xml->registros_all_xml('libros.xml');
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>
  <div class="breadcrumb"><a href="index.php"> Inicio </a> > <a href="libros.php"> Libros Electrónicos </a></div>
  <div class="container">
    <div class="section">
      <div class="row">
       <h3 class="center">Libros Electrónicos</h3>
       <div class="input-field col s12">
        <input id="libros_search" type="text" autocomplete="off">
        <label for="libros_search">Buscar Libro</label>
      </div>
    </div>
    <!--   Icon Section   -->
    <div class="row elements" data-filter="true" data-input="#Libros">
      <?php
      foreach ($todos_libros as $libro) {
        ?>
        <div class="col s12 m6">
          <div class="card horizontal">
            <div class="card-image">
              <img src="<?= URL_MASTER ?>/images/libros/<?= $libro->imagen ?>" class="img_card">
            </div>
            <div class="card-stacked">
              <div class="card-content">
                <p class="titulo_card"><?= $libro->nombre ?></p>
                <p class="autor_card"><b>Autor(es): </b>
                  <?= $libro->autores ?>
                </p>
              </div>
              <div class="card-action">
                <a class="enlace" href="<?= URL_MASTER ?>/pages/detalle_libro.php?id=<?= $libro->id ?>" >Mas información</a>
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