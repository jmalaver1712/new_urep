<!doctype html>
<html>
<head>
  <?php require_once('../plantilla/head.php');
  ?>
</head>
<body>
  <?php require_once('plantilla_admin/menu_admin.php'); ?>
  <!-- CONTENIDO -->
  <div class="container">

    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3>Eventos</h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra los Eventos</p>
          </div>
          <div class="card-action">
            <a href="list_noticias_eventos.php?tipo=evento">Ver Eventos</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3>Noticias</h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra las Noticias</p>
          </div>
          <div class="card-action">
            <a href="list_noticias_eventos.php?tipo=noticia">Ver Noticias</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col s12 m6">
      <div class="card horizontal">
        <div class="card-image">
          <h3>Banners</h3>
        </div>
        <div class="card-stacked">
          <div class="card-content">
            <p>Conoce y administra las Banners</p>
          </div>
          <div class="card-action">
            <a href="list_noticias_eventos.php?tipo=banner">Ver Banners</a>
          </div>
        </div>
      </div>
    </div>


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