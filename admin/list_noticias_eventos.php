<!doctype html>
<html>
<head>
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  
  <?php require_once('../plantilla/head.php');
  $todos_regs = $get_xml->registros_all_xml($_GET['id'].'.xml');
  ?>
</head>
<body>
<?php require_once('plantilla_admin/menu_admin.php'); ?>
<!-- CONTENIDO -->
<div class="container">
  <center>
    <h3>Conoce todas las publicaciones</h3>
  </center>
    <?php
      foreach ($todos_regs as $reg) {
    ?>
      <div class="col s12 m6">

        <div class="card horizontal">
          <div class="card-image">
            <img src="../images/noticias_eventos/<?= $reg->imagen; ?>" class="img_card">
          </div>
          <div class="card-stacked">
            <div class="card-content">
              <p class="titulo_card mayus"><?= $reg->titular; ?><br><b>[<?= $reg->tipo; ?>]</b><br></p>
              <p class="autor_card">
                <?= $reg->resumen; ?>
              </p>
              <div class="input-field col s12">
                <input class="orden_not" placeholder="Orden" name="<?= $reg->id; ?>" id="orden<?= $reg->id; ?>" type="number" value="<?= $reg->orden; ?>">
                <label for="orden">Orden</label>
              </div>

            </div>
            <div class="card-action">
              <a href="<?= URL_MASTER ?>/pages/publicaciones/<?= $reg->tipo ?>/<?= $_GET['id'] ?>/<?= $reg->name ?>">Ver</a>
              <a href="form_noticias_eventos.php?id=<?= $reg->id; ?>">Editar</a>
              <a class="confirmar_url" href="control/control_noticias_eventos.php?accion=delete&id=<?= $reg->id; ?>">Eliminar</a>
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