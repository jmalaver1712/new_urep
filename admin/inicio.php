<!doctype html>
<html>
<head>
  <style type="text/css">
    .card-image > h3{
      text-transform: uppercase;
    }
  </style>
  <?php require_once('../plantilla/head.php');
   $items = $get_xml->registros_all_xml("item.xml");
  ?>
</head>
<body>
  <?php require_once('plantilla_admin/menu_admin.php'); ?>
  <!-- CONTENIDO -->
  <div class="container">

    <?php
    foreach ($items as $item) {
    ?>

    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3><?= $item->nombre ?></h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra las publicaciones</p>
          </div>
          <div class="card-action">
            <a href="list_noticias_eventos.php?id=<?= $item->nombre ?>">Ver publicaciones</a>
          </div>
        </div>
      </div>
    </div>

    <?php
    }
    ?>


    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3>Libros</h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra los libros</p>
          </div>
          <div class="card-action">
            <a href="list_libros.php">Ver libros</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3>Gaceta</h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra las Versiones de la Gaceta Republicana</p>
          </div>
          <div class="card-action">
            <a href="list_gacetas.php">Ver Versiones</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  
  <?php require_once('../plantilla/footer.php'); ?>

</body>
</html>