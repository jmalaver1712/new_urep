<!doctype html>
<html>
<head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <?php require_once('../plantilla/head.php'); 
  $todos_libros = $get_xml->registros_all_xml('libros.xml');
  ?>
</head>
<body>
  <?php require_once('plantilla_admin/menu_admin.php'); ?>
  <!-- CONTENIDO -->
  <div class="container">
    <center>
      <h3> Libros </h3>
    </center>
    <?php
    foreach ($todos_libros as $libro) {
      ?>

      <div class="col s12 m6">

        <div class="card horizontal">
          <div class="card-image">
            <img height="200px" src="../images/libros/<?= $libro->imagen ?>" class="img_card">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="titulo_card"><?= $libro->nombre ?></p>
              <p class="autor_card">
                <b>Autores:</b><?= $libro->autores ?>
              </p>
            </div>
            <div class="card-action">
              <a target="_blank" href="../pages/detalle_libro.php?id=<?= $libro->id ?>">Ver</a>
              <a href="form_libros.php?id=<?= $libro->id ?>"">Editar</a>
              <a class="confirmar_url" href="control/control_libros.php?accion=delete&id=<?= $libro->id ?>">Eliminar</a>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
  
  <?php require_once('../plantilla/footer.php'); ?>

</body>
</html>