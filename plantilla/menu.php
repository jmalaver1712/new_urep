
<?php 
$header = $get_xml->registros_all_xml('header.xml');
$todos_menus = $get_xml->registros_all_xml('menu.xml');
$menu_principal = $get_xml->reg_detail_xml("nivel" , "1", "menu.xml", null);
// $submenu_principal = $get_xml->reg_detail_xml("nivel" , "3", "menu.xml", null);
$todos_programas_menu = $get_xml->registros_all_xml('programas.xml');
// $img_logo = str_replace("URL_MASTER", URL_MASTER, );

$tipo_programas = [ 
	'Pregrado' =>'Profesional' ,
	'Posgrado' =>'Posgrado',
	'Diplomados' =>'Diplomado', 
];
?>
<div class="row" id="main_menu" style="width: 100%;">
  <div class="col s4 m2 l2 right-align menu_nav">
    <a href="<?= URL_MASTER ?>/pages/"> <img src="<?= URL_MASTER ?>/images/web/<?= $header[0]->logo ?>" class="logo_urep"> </a>
  </div>

  <div class="col s6 m9 l4 left-align menu_nav">
    <div style="display:inline-block;">
      <h1 class="tipo_urep" style="width: 100%;" ><?= $header[0]->titulo ?></h1>
      <center><p class="legal_urep"><?= $header[0]->descripcion ?></p></center>
    </div>
  </div>

  <div class="col s2 m1 l6">
    <div class="nav-wrapper">
      <a href="#" id="btn_menu" data-activates="menu_mobile" class="button-collapse"><i class="material-icons">menu</i></a>

      <!-- MOBILE MENU -->
      <ul id="menu_mobile" class="side-nav center-align">

        <a href="<?= URL_MASTER ?>/pages/"><img src="<?= URL_MASTER ?>/images/web/logo.png" width="30%"></a>

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header waves-effect">Programas</a>
              <div class="collapsible-body nivel_2">
                <ul>

                  <?php 
                  foreach ($tipo_programas as $label => $tipo) {
                    ?>
                    <li class="no-padding">
                      <ul class="collapsible collapsible-accordion">
                        <li>
                          <a class="collapsible-header waves-effect"><?= $label ?></a>
                          <div class="collapsible-body nivel_3">
                            <ul>
                              <?php
                              foreach ($todos_programas_menu as $programa_menu) {
                                if($programa_menu->nivel_academico == $tipo){
                                  ?>
                                  <li>
                                    <a href="<?= URL_MASTER ?>/pages/programas/<?= $programa_menu->nivel_academico."/".$programa_menu->name ?>"> <?= $programa_menu->nombre_programa ?></a>
                                  </li>
                                  <?php
                                }
                              }
                              ?>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <?php
                  }
                  ?>

                  <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                      <li>
                        <a class="collapsible-header waves-effect">Educacion Continuada</a>
                        <div class="collapsible-body nivel_3">
                          <ul>
                            <li><a target="_blank" href="http://urepublicana.edu.co/contratacion-estatal/">Contratación Estatal</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/derecho-disciplinario-colombiano/">Derecho Disciplinario Colombiano</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/regimen-disciplinario-de-las-fuerzas-militares/">Regimen Disciplinario de las Fuerzas Militares</a></li>
                            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/diplomado-en-formacion-y-capacitacion-de-conciliadores/">Diplomado en Formación y Capacitación de Conciliadores</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </li>

                </ul>
              </div>
            </li>
          </ul>
        </li>

        <?php
        foreach ($todos_menus as $menu) {
          $url = "$menu->url";
          $nivel = "$menu->nivel";
          if ($nivel == "1" && $menu->texto <> "Programas") {
            $url_n1 = "#";
            if (!is_numeric($url)) {
              $url_n1 = str_replace("URL_MASTER", URL_MASTER, $url);
            }
            ?>
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header waves-effect" href="<?= $url_n1 ?>"><?= $menu->texto ?></a>
                  <div class="collapsible-body nivel_2">
                    <ul>
                      <?php
                      $submenu_mobile = $get_xml->reg_detail_xml("id" , $url, "menu.xml", null);
                      foreach ($submenu_mobile as $submenu_mobile_1) {
                        $url = "$submenu_mobile_1->url";
                        $url_def = str_replace("URL_MASTER", URL_MASTER, $url);
                        if (is_numeric($url_def)) {
                          $url_def = "#".$submenu->url;
                        }

                        ?>
                        <li><a href="<?= $url_def ?>"><?= $submenu_mobile_1->texto ?></a></li>
                        <?php
                      }
                      ?>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <?php
          }
        }

        foreach ($todos_menus as $menu) {
          $url = "$menu->url";
          $nivel = "$menu->nivel";
          if ($nivel == "3") {
            $url_n1 = "#";
            if (!is_numeric($url)) {
              $url_n1 = str_replace("URL_MASTER", URL_MASTER, $url);
            }
            ?>
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header waves-effect" href="<?= $url_n1 ?>"><?= $menu->texto ?></a>
                  <div class="collapsible-body nivel_2">
                    <ul>
                      <?php
                      $submenu_mobile = $get_xml->reg_detail_xml("id" , $url, "menu.xml", null);
                      foreach ($submenu_mobile as $submenu_mobile_1) {
                        $url = "$submenu_mobile_1->url";
                        $url_def = str_replace("URL_MASTER", URL_MASTER, $url);
                        if (is_numeric($url_def)) {
                          $url_def = "#".$submenu->url;
                        }
                        ?>
                        <li><a href="<?= $url_def ?>"><?= $submenu_mobile_1->texto ?></a></li>
                        <?php
                      }
                      ?>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>
            <?php
          }
        }
        ?>
        <li><a href="#"><br></a></li>
        <li><a href="#"><br></a></li> 
      </ul>
      <!-- FIN MENU -->

      <div class="row">
        <ul class="right nav_urep">

          <?php 

          foreach ($menu_principal as $menu) {
            $url = "$menu->url";
            $url_def = "#!";
            if (is_numeric($url)) {
              $url = "#".$menu->url;
            }
            else{
              $href = $menu->url;
              $url_def = str_replace("URL_MASTER", URL_MASTER, $href);
            }
            ?>
            <li class="nav_main"><a class="enlace_menu" href="<?= $url_def ?>" name="<?= $url ?>"><?= $menu->texto ?></a></li>
            <?php
          }
          ?>

        </ul>
        <ul class="right nav_urep nav_aux">
          <?php 
          foreach ($todos_menus as $submenu) {
            if ($submenu->nivel == "3") {
              $url = "$submenu->url";
              $url_def = str_replace("URL_MASTER", URL_MASTER, $url);
              if (is_numeric($url_def)) {
                $url_def = "#".$submenu->url;
              }

              ?>
              <li><a class="enlace_menu" href="<?= $url_def ?>" name="<?= $url_def ?>"><?= $submenu->texto ?></a></li>
              <?php
            }
          }
          ?>
        </ul>
      </div>

    </div>
  </div>


  <?php 
  foreach ($todos_menus as $menu) {
    $url = "$menu->url";
    if (is_numeric($url)) {
      ?>
      <div id="<?= $menu->url ?>" class="menu_det ocultar">
        <div class="menu_all">
          <div class="container">
            <div class="row">
              <h3 class="center-align" ><?= $menu->texto ?></h3>
              <div class="col m9">
                <div class="row">
                  <div class="col m4">
                    <ul>
                      <?php 
                      $aux = 1;
                      $menu2 = $get_xml->reg_detail_xml("id", "$menu->url" ,"menu.xml", null);
                      foreach ($menu2 as $key) {
                        $url_def = str_replace("URL_MASTER", URL_MASTER, $key->url);
                        ?>
                        <li><a href="<?= $url_def ?>"><?= $key->texto ?></a></li>
                        <?php
                        if ($aux == 4) {
                          $aux = 0;
                          ?>
                          </ul></div><div class="col m4"><ul><?php
                        }
                        $aux++;
                      }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col m3">
                <img src="<?= URL_MASTER ?>/images/web/menu/<?= $menu->texto ?>.png" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }
  ?>


  <!-- Programas -->
  <div id="programas" class="menu_det ocultar">
    <div class="menu_all">
      <div class="container">
        <div class="row">
          <h3 class="center-align" >Programas</h3>
          <div class="col m3">

            <ul>
              <?php foreach ($tipo_programas as $label => $tipo): ?>
                <li><a class="enlace_menu_2" name="#prom_<?= $label ?>" href="#"><?= $label ?></a></li>
              <?php endforeach ?>
              <li><a class="enlace_menu_2" name="#prom_edcontinua" href="#">Educación Continuada</a></li>
            </ul>

          </div>
          <div class="col m6">

           <?php foreach ($tipo_programas as $label => $tipo): ?>

            <ul id="prom_<?= $label ?>" class="programas ocultar">
              <?php
              foreach ($todos_programas_menu as $programa_menu) {
                if($programa_menu->nivel_academico == $tipo){
                  ?>
                  <li>
                    <a href="<?= URL_MASTER ?>/pages/programas/<?= $programa_menu->nivel_academico."/".$programa_menu->name ?>"> <?= $programa_menu->nombre_programa ?></a>
                  </li>
                  <?php
                }
              }
              ?>
            </ul>

          <?php endforeach ?>

          <ul id="prom_edcontinua" class="programas ocultar" >

            <li><a target="_blank" href="http://urepublicana.edu.co/contratacion-estatal/">Contratación Estatal</a></li>
            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/derecho-disciplinario-colombiano/">Derecho Disciplinario Colombiano</a></li>
            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/regimen-disciplinario-de-las-fuerzas-militares/">Regimen Disciplinario de las Fuerzas Militares</a></li>
            <li><a target="_blank" href="http://urepublicana.edu.co/educacion-continuada/diplomado-en-formacion-y-capacitacion-de-conciliadores/">Diplomado en Formación y Capacitación de Conciliadores</a></li>

          </ul>


        </div>
        <div class="col m3">
          <img src="<?= URL_MASTER ?>/images/web/menu/Programas.png" width="100%">
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- FORMULARIO DE INFORMACION 
  <div id="solicita_info" class="activa_form">

        
    <div id="btn_informacion" class="pulse">
      <a class="tooltipped" data-position="right" data-delay="50" data-tooltip="¿Necesita información?">
        <i class="material-icons">info_outline</i>
        <p class="center">¿Necesita información?</p>
      </a>
      <i id="cerrar_info" class="material-icons tooltipped" data-position="right" data-delay="50" data-tooltip="Ocultar">close</i>
    </div>

    <div id="form_informacion" class="ocultar">
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
            <select name="pro" id="programa" required>
            <option value="" disabled selected>Seleccione una...</option>
              <optgroup label="Pregrado">
              <?php
                foreach ($todos_programas_menu as $programa_menu) {
                  if($programa_menu->nivel_academico == "Profesional"){
                    ?>
                    <option value="<?= $programa_menu->id_mercadeo ?>"><?= $programa_menu->nombre_programa ?></option>
                    <?php
                  }
                }
              ?>
              </optgroup>

              <optgroup label="Posgrado">
              <?php
                foreach ($todos_programas_menu as $programa_menu) {
                  if($programa_menu->nivel_academico == "Posgrado"){
                    ?>
                    <option value="<?= $programa_menu->id_mercadeo ?>"><?= $programa_menu->nombre_programa ?></option>
                    <?php
                  }
                }
              ?>
              </optgroup>
            </select>
            <label>Programa de Interes</label>
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
  FIN FORMULARIO DE INFORMACION -->


</div>