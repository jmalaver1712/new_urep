<?php
if (!isset($_POST['id'])){
  print('<meta http-equiv="refresh" content="0.1; url=../pages/programas.php" />');
  exit();
}
?>
<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $programa = $get_xml->reg_detail_xml("snies", $_POST['id'] ,"programas.xml", 1);
  $id_pensum = trim($programa[0]->id_pensum); 
  $cursos = $get_xml->reg_detail_xml("id_pensum", $id_pensum ,"cursos.xml", null);
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>

  <div class="breadcrumb"><a href="../pages/programas.php"> Inicio </a> >  <a href="../pages/programas.php">Programas</a> > <a class="post_variable" title="../pages/programas.php" name="<?= $programa[0]->nivel_academico ?>" href="#!"><?= $programa[0]->nivel_academico ?></a> > <?= $programa[0]->nombre_programa ?></div>

  <!-- Modal Structure -->
  <div id="video_promo" class="modal">
    <div class="modal-content center">
      <h5>Experiencia</h5>
      <?= $programa[0]->video_promo ?>
    </div>
    <div class="modal-footer center">
      <a href="#!" class="modal-action modal-close waves-effect btn red darken-3">Cerrar</a>
    </div>
  </div>
  <!-- FINAL MODAL -->

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <h3 class="center"><?= $programa[0]->nombre_programa ?></h3>
        <div class="col s12 m3 center">
          <img src="../images/programas/<?= $programa[0]->snies ?>.jpg" width="100%">
          <?php
          if ($programa[0]->video_promo  != ""){
            ?>
            <a class="waves-effect waves-light btn-large red darken-3 modal-trigger" href="#video_promo">
              <i class="material-icons left">ondemand_video</i>Experiencia
            </a><br><br>
            <?php
          }
          ?>
          <a class="waves-effect waves-light btn-large red darken-3 modal-trigger" href="../pages/admisiones.php">
            <i class="material-icons left">create</i>Inscríbete
          </a>
        </div>

        <div class="col s12 m9">

          <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#descripcion_programa">Descripción</a></li>
            <li class="tab col s3"><a href="#plan_estudios">Plan de Estudios</a></li>
            <!-- <li class="tab col s3"><a href="#otra_cosa">Otra cosa</a></li> -->
          </ul>

          <!-- INFORMACION PROGRAMA -->
          <div id="descripcion_programa" class="col s12">
            <table class="bordered">
              <tbody>

                <tr>
                  <th>Nivel Académico</th>
                  <td>
                    <?= $programa[0]->nivel_academico ?>
                  </td>
                </tr>

                <tr>
                  <th>SNIES</th>
                  <td>
                    <?= $programa[0]->snies ?><br>
                    <i style="font-size: 0.75em;"><?= $programa[0]->resolucion ?></i>
                  </td>
                </tr>

                <tr>
                  <th>Modalidad</th>
                  <td>
                    <?= $programa[0]->metodologia ?>
                  </td>
                </tr>

                <tr>
                  <th>Franja</th>
                  <td>
                    <?= $programa[0]->franja ?>
                  </td>
                </tr>

                <tr>
                  <th>Facultad</th>
                  <td>
                    <?= $programa[0]->facultad ?>
                  </td>
                </tr>

                <tr>
                  <th>Titulo Otorgado</th>
                  <td>
                    <?= $programa[0]->titulo_otorgado ?>
                  </td>
                </tr>

                <tr>
                  <th>Perfil Profesional</th>
                  <td>
                    <p class="justificado"><?= $programa[0]->perfil_profesional ?></p>
                  </td>
                </tr>

                <tr>
                  <th>Perfil Ocupacional</th>
                  <td>
                    <p class="justificado"><?= $programa[0]->perfil_ocupacional ?></p>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

          <!-- PLAN DE ESTUDIOS -->
          <div id="plan_estudios" class="col s12">
            <div class="row">
              <?php
              for ($i=1; $i <= $programa[0]->semestres; $i++) {
                ?>
                <div class="col s12 m6">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator center" src="../images/web/semestres/semestre<?= $i ?>.jpg">
                    </div>

                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4"> <i class="material-icons right">close</i></span>
                      <table class="bordered">
                        <tbody>
                          <tr>
                            <th>Nombre del Curso</th>
                            <th>Créditos</th>
                          </tr>
                          <?php 
                          $creditos = 0;
                          foreach ($cursos as $curso) {
                            if ($curso->semestre == $i) {
                              $creditos = $creditos + $curso->creditos;
                              ?>
                              <tr>
                                <td><?= $curso->materia_nombre; ?></td>
                                <td><?= $curso->creditos; ?></td>
                              </tr>
                              <?php
                            }
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>

                    <div class="card-content">
                      <p class="activator grey-text text-darken-4 center">Total Créditos <?= $creditos ?></p>
                    </div>

                  </div>
                </div>
                <?php
              }
              ?>
            </div>
          </div>

          <!-- OTRA COSA -->
          <!-- 
          <div id="otra_cosa" class="col s12">
            Otra cosa
          </div> 
        -->

      </div>

    </div>

  </div>
  <br><br>
</div>

<?php require_once('../plantilla/footer.php'); ?>
</body>
</html>
