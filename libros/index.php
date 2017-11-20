<?php
  if (!isset($_POST['id'])){
    print('<meta http-equiv="refresh" content="0.1; url=../pages/libros.php" />');
    exit();
  }
?>
<!doctype html>
<html manifest="urepublicana.appcache">
<head>
  <?php require_once('../plantilla/head.php'); 
  $libro = $get_xml->reg_detail_xml("id" ,$_POST['id'] ,"libros.xml", 1);
  ?>
</head>
<body id="body_urep">
  <?php require_once('../plantilla/menu.php'); ?>
  <div class="breadcrumb"> <a href="index.php"> Inicio </a> > <a href="../pages/libros.php"> Libros Electrónicos </a> > <?= $libro[0]->nombre ?></div>


  <!-- Modal Structure -->
  <div id="autorizacion" class="modal">
    <div class="modal-content center">
      <h5>SEÑOR LECTOR</h5>
        <img  src="../images/web/libros_gaceta/legal_libros.png">
        <p class="justificado">
        La presente obra está bajo la licencia: <b>Atribución – No comercial – Sin Derivar: </b>
        <br>
        Esta licencia sólo permite que otros puedan descargar las obras y compartirlas con otras personas, siempre que se reconozca su autoría, pero no se pueden cambiar de ninguna manera ni se pueden utilizar comercialmente.
        <br>
        Si está de acuerdo con los términos de descarga, ingrese los siguientes datos para continuar.
        </p>

        <form class="col s12 left-align" action="../pages/descarga_libros.php" method="POST" id="form_descarga_libro">

          <div class="input-field col s12">
            <input name="nombres_apellidos" id="nombres_apellidos" type="text" class="validate" autocomplete="off" required>
            <label for="nombres_apellidos">* Nombres y Apellidos</label>
          </div>

          <div class="input-field col s12">
            <input name="email" id="email" type="email" class="validate" autocomplete="off" required>
            <label for="email">* Email</label>
          </div>

          <input name="nombre_libro" type="hidden" value="<?= $libro[0]->nombre ?>">
          <input name="isbn_libro" type="hidden" value="<?= $libro[0]->isbn_digital ?>">
          <input name="fecha_descarga_libro" type="hidden" value="<?= date('Y-m-d H:i:s') ?>">
          

          <div class="input-field col s12">
            <input id="btn_form_descarga" type="submit" class="btn boton_urep" value="Descargar">
            <br><br>
          </div>

        </form>

        <p class="justificado legal">
        La Corporación Universitaria Republicana de acuerdo con el artículo 10 del decreto 1377 de 2013 queda autorizada de manera expresa e inequívoca para mantener y manejar la información anteriormente brindada, a no ser que usted le manifieste lo contrario de manera directa, expresa, inequívoca y por escrito dentro de los treinta (30) días hábiles contados a partir de la recepción de la presente comunicación a la cuenta de correo electrónico dispuesta para tal efecto: 
        <br>
        Consiento y autorizo de manera expresa e inequívoca que mis datos personales sean tratados conforme a lo previsto en el presente documento. 
        </p>

    </div>
    <div class="modal-footer center">
      <a href="#!" class="modal-action modal-close waves-effect btn red darken-3">Cerrar</a>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3 center">
          <img src="../images/libros/<?= $libro[0]->imagen ?>" width="100%">

          <a class="waves-effect waves-light btn red darken-3 modal-trigger" href="#autorizacion">
            <i class="material-icons left">cloud_download</i>Descargar
          </a>
          
          <a id="descarga_libro" class="ocultar" download="<?= $libro[0]->nombre ?>.pdf" href="../images/libros_pdf/<?= $libro[0]->isbn_digital ?>.pdf"></a>

          <!--           
          <a href="../images/libros_pdf/<?= $libro[0]->isbn_digital ?>.pdf" target="_blank" class="waves-effect waves-light btn red darken-3">
            <i class="material-icons left">cloud_download</i>Descargar
          </a> 
          -->

        </div>

        <div class="col s12 m9">
          <table class="bordered">

            <tbody>

              <tr>
                <th>Titulo</th>
                <td colspan="2" class="titulo_libro">
                  <?= $libro[0]->nombre ?>
                </td>
              </tr>

              <tr>
                <th>Autor(es)</th>
                <td colspan="2" class="autor_libro">
                  <?= $libro[0]->autores ?>
                </td>
              </tr>

              <tr>
                <th rowspan="2">Version Impresa</th>
                <th>ISBN</th>
                <td> <?= $libro[0]->isbn_impresa ?> </td>
              </tr>

              <tr>
                <th>Año</th>
                <td> <?= $libro[0]->ano_impresa ?> </td>
              </tr>

              <tr>
                <th rowspan="2">Version Digital</th>
                <th>ISBN</th>
                <td> <?= $libro[0]->isbn_digital ?> </td>
              </tr>

              <tr>
                <th>Año</th>
                <td> <?= $libro[0]->ano_digital ?> </td>
              </tr>

              <tr>
                <th>Abstract</th>
                <td colspan="2">
                  <?= $libro[0]->abstract ?>
                </td>
              </tr>

              <tr>
                <th>Programa Académico</th>
                <td colspan="2"> 
                  <?= $libro[0]->programa_academico ?> 
                </td>
              </tr>

              <tr>
                <th rowspan="2">
                  Citar en formato:
                </th>

                <td colspan="2">
                  <div class="input-field col s12">
                    <select class="icons" id="select_cita">
                      <option value="null" disabled selected>Seleccione una...</option>
                      <option value="APA" data-icon="../images/web/libros_gaceta/normas_apa.jpg" class="circle">APA</option>
                      <option value="IEEE" data-icon="../images/web/libros_gaceta/normas_ieee.jpg" class="circle">IEEE</option>
                    </select>
                    <label>Formatos Disponibles</label>
                  </div>
                </td>
              </tr>

              <tr>
                <td colspan="3">
                  <p id="null" class="citacion ocultar">
                    No ha seleccionado ningun formato de citación
                  </p>

                  <p id="APA" class="citacion ocultar">
                    <b> Cita formato APA: </b><br>
                    <?= $libro[0]->APA ?> 
                  </p>

                  <p id="IEEE" class="citacion ocultar">
                    <b> Cita formato IEEE: </b><br>
                    <?= $libro[0]->IEEE ?> 
                  </p>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

      </div>

    </div>
    <br><br>
  </div>
  <script type="text/javascript">
  $('#form_descarga_libro').submit(function(){
     $("#descarga_libro").get(0).click();
  });
  </script>
  <?php require_once('../plantilla/footer.php'); ?>
</body>
</html>