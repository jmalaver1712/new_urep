<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $programa = $get_xml->reg_detail_xml("name", $_GET['id'] ,"programas.xml", 1);
  $id_pensum = trim($programa[0]->id_pensum); 
  $cursos = $get_xml->reg_detail_xml("id_pensum", $id_pensum ,"cursos.xml", null);
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>

  <div class="breadcrumb"><a href="<?= URL_MASTER ?>/pages/"> Inicio </a> >  <a href="<?= URL_MASTER ?>/pages/programas.php">Programas</a> > <a href="<?= URL_MASTER ?>/pages/programas/<?= $programa[0]->nivel_academico ?>"><?= $programa[0]->nivel_academico ?></a> > <?= $programa[0]->nombre_programa ?></div>


  <div id="form_programa" class="modal">
    <div class="modal-content">
      <center><h4>Quiero más Información</h4></center>
      <div id="form_informacion">
        <div class="icon-block">
          <form class="col s12" action="#" method="POST" id="form_info">
            <label class="center" style="color: black;">
              <h6>¿Necesita más información sobre su programa de interés?</h6>
              <p class="center">Ingrese sus datos, un asesor se comunicará con usted.</p>
            </label>
            <div class="input-field col s12">
              <input name="nom" id="nombres_apellidos" type="text" class="validate" autocomplete="off" required>
              <label for="nombres_apellidos">* Nombres y Apellidos</label>
            </div>

            <div class="input-field col s6">
              <input name="cel" id="celular" type="number" class="validate" autocomplete="off" required>
              <label for="celular">* Celular</label>
            </div>

            <div class="input-field col s6">
              <input name="ema" id="email" type="email" class="validate" autocomplete="off" required>
              <label for="email">* Email</label>
            </div>

            <div class="input-field col s12">
              <input type="hidden" name="pro" value="<?= $programa[0]->id_mercadeo ?>" required>
              <input type="text" id="programa" value="<?= $programa[0]->nombre_programa ?>" required disabled>
              <label for="programa">Programa de Interes</label>
            </div>

            <div class="input-field col s12">
              <div class="g-recaptcha" data-sitekey="6LdpHhMTAAAAAEdufQp1hh8N02SrSedKBS5ZRqul" data-callback="correctCaptcha"></div>
            </div>

            <div class="input-field col s12">
              <input type="checkbox" id="terminos" name="terminos" required /><label  id="terminos" for="terminos">
              Si autorizo el uso de los datos por parte de la Corporación Universitaria Republicana</label>
              <br><br>
            </div>                  

            <div class="input-field col s12">
              <input id="btn_form_info" type="submit" class="btn boton_urep" value="Enviar" disabled="">
              <br><br>
            </div>

          </form>
        </div>
      </div>
    </div>
    <div class="modal-footer center">
      <a href="#!" class="modal-action modal-close waves-effect btn red darken-3">Cerrar</a>
    </div>
  </div>


  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <h3 class="center"><?= $programa[0]->nombre_programa ?></h3>
        <div class="col s12 m3 center">
          <img src="<?= URL_MASTER ?>/images/programas/<?= $programa[0]->snies ?>.jpg" width="100%">
          <br><br>
          <a class="waves-effect waves-light btn-large red darken-3 btn_programa" href="<?= URL_MASTER ?>/pages/admisiones/">
            <i class="material-icons left">create</i>Cómo inscribirme
          </a>
          <br><br>
          <a class="waves-effect waves-light btn-large red darken-3 btn_programa" href="#form_programa">
            <i class="material-icons left">create</i>Quiero más información
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
            <center>
              <?php
              if ($programa[0]->video_promo  != ""){
                ?>
                <h5>Mi Experiencia</h5>
                <?= $programa[0]->video_promo ?>
                <?php
              }
              ?>
            </center>

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
                      <img class="activator center" src="<?= URL_MASTER ?>/images/web/semestres/semestre<?= $i ?>.jpg">
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

<div class="container">
  <form class="col s12" action="#" method="POST" id="form_info">
    <label class="center" style="color: black;">
      <h6>¿Necesita más información sobre su programa de interés?</h6>
      <p class="center">Ingrese sus datos, un asesor se comunicará con usted.</p>
    </label>
    <div class="input-field col s12">
      <input name="nom" id="nombres_apellidos" type="text" class="validate" autocomplete="off" required>
      <label for="nombres_apellidos">* Nombres y Apellidos</label>
    </div>

    <div class="input-field col s6">
      <input name="cel" id="celular" type="number" class="validate" autocomplete="off" required>
      <label for="celular">* Celular</label>
    </div>

    <div class="input-field col s6">
      <input name="ema" id="email" type="email" class="validate" autocomplete="off" required>
      <label for="email">* Email</label>
    </div>

    <div class="input-field col s12">
      <input type="hidden" name="pro" value="<?= $programa[0]->id_mercadeo ?>" required>
      <input type="text" id="programa" value="<?= $programa[0]->nombre_programa ?>" required disabled>
      <label for="programa">Programa de Interes</label>
    </div>

    <div class="input-field col s12">
      <div class="g-recaptcha" data-sitekey="6LdpHhMTAAAAAEdufQp1hh8N02SrSedKBS5ZRqul" data-callback="correctCaptcha"></div>
    </div>

    <div class="input-field col s12">
      <input type="checkbox" id="terminos" name="terminos" required /><label  id="terminos" for="terminos">
      Si autorizo el uso de los datos por parte de la Corporación Universitaria Republicana</label>
      <br><br>
    </div>                  

    <div class="input-field col s12">
      <input id="btn_form_info" type="submit" class="btn boton_urep" value="Enviar" disabled="">
      <br><br>
    </div>

  </form>
</div>

<?php require_once('../plantilla/footer.php'); ?>
</body>
</html>
