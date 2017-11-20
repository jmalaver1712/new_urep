<!doctype html>
<html>
<head>
  <?php require_once('../plantilla/head.php'); 
  $todos_gaceta = $get_xml->registros_all_xml('gaceta.xml');
  ?>
</head>
<body>
<?php require_once('plantilla_admin/menu_admin.php'); ?>
<!-- CONTENIDO -->
<div class="container">
  <center>
    <h3> Gaceta </h3>
  </center>
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
              <p class="autor_card">
                <?= $gaceta->descripcion ?>
              </p>
            </div>
            <div class="card-action">
              <a href="form_gaceta.php?id=<?= $gaceta->id; ?>"">Editar</a>
              <a class="confirmar_url" href="control/control_gaceta.php?accion=delete&id=<?= $gaceta->id; ?>">Eliminar</a>
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