<!doctype html>
<html>
<head>
  <?php require_once('../plantilla/head.php'); 
  $todos_regs = $get_xml->reg_detail_xml("tipo", $_GET['tipo'], 'noticias_eventos.xml', null);
  if($_GET['tipo'] == "evento"){
    $title = "Conoce todos los Eventos";
  }
  if($_GET['tipo'] == "noticia"){
    $title = "Conoce todas las Noticias";
  }
  if($_GET['tipo'] == "banner"){
    $title = "Conoce todos los Banner";
  }
  ?>
</head>
<body>
<?php require_once('plantilla_admin/menu_admin.php'); ?>
<!-- CONTENIDO -->
<div class="container">
  <center>
    <h3> <?= $title ?> </h3>
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
              <p class="titulo_card"><?= $reg->titular; ?></p>
              <p class="autor_card">
                <?= $reg->resumen; ?>
              </p>
              <div class="input-field col s12">
                <input class="orden_not" placeholder="Orden" name="<?= $reg->id; ?>" id="orden<?= $reg->id; ?>" type="number" value="<?= $reg->orden; ?>">
                <label for="orden">Orden</label>
              </div>

            </div>
            <div class="card-action">
              <a class="post_variable" title="../noticias_y_eventos/" name="<?= $reg->id ?>" href="#!">Ver</a>
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