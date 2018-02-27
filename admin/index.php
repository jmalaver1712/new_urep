<!doctype html>
<html>
<head>
  <?php require_once('../plantilla/head.php'); ?>
</head>
<body>
  <!-- CONTENIDO -->
  <div class="container">
    <div class="row">

      <div class="col s12 m6 offset-m3">
        <div class="card horizontal">
          <div class="card-stacked">
            <div class="card-content">
              
              <div class="row center">
                <h2>Iniciar Sesión</h2>
              </div>
              <form class="col s12" action="control/acceso.php" method="POST">
                <div class="row">
                  <div class="input-field col s12">
                    <input type="text" id="user" name="user" class="validate">
                    <label for="user">Usuario</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Contraseña</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12 center">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
                    <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>

              </form>
            
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  
  <?php require_once('../plantilla/footer.php'); ?>

</body>
</html>