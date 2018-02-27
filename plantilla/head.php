  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107902131-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-107902131-1');
  </script>

  <?php 
  require_once('../plantilla/config.php');
  ?>
  <meta charset="UTF-8">
  <title>Corporación Universitaria Republicana</title>
  <meta content="Corporación Universitaria Republicana. Formar más colombianos sociales, ética y científicamente" name="description" lang="es-ES">
  <meta content="pregrado, postgrado, derecho, ingenierías, trabajo social, contaduría pública, finanzas y comercio internacional, Matemáticas, Posgrados bogota, Pregrados bogota," name="keywords" lang="es-ES">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="<?= URL_MASTER ?>/images/web/logo.png">

  <!-- Styles of this template -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  <link rel="stylesheet" href="<?= URL_MASTER ?>/assets/css/slider.min.css" type="text/css">
  <!-- LayerSlider styles -->

  <link rel="stylesheet" href="<?= URL_MASTER ?>/assets/slider/css/layerslider.css" type="text/css">
  <!-- External libraries: jQuery & GreenSock -->
  <script src="<?= URL_MASTER ?>/assets/slider/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?= URL_MASTER ?>/assets/slider/js/greensock.min.js"></script>
  <!-- LayerSlider script files -->
  <script src="<?= URL_MASTER ?>/assets/slider/js/layerslider.transitions.min.js" type="text/javascript"></script>
  <script src="<?= URL_MASTER ?>/assets/slider/js/layerslider.kreaturamedia.jquery.min.js" type="text/javascript"></script>
  <!-- LayerSlider Popup plugin files -->
  <link rel="stylesheet" href="<?= URL_MASTER ?>/assets/slider/plugins/origami/layerslider.origami.css" type="text/css">
  <script src="<?= URL_MASTER ?>/assets/slider/plugins/origami/layerslider.origami.js" type="text/javascript"></script>


  <!-- MATERIALIZE -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= URL_MASTER ?>/assets/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- STYLE -->
  <link href="<?= URL_MASTER ?>/assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <!-- CARRUSEL -->
  <link rel="stylesheet" href="<?= URL_MASTER ?>/assets/owlcarousel/owl.carousel.css">
  <script src="<?= URL_MASTER ?>/assets/owlcarousel/owl.carousel.min.js"></script>

  <!-- ANIMATE -->
  <!-- <link rel="stylesheet" href="<?= URL_MASTER ?>/assets/css/animate.min.css"> -->

  <!-- TEXT -->
  <script src="<?= URL_MASTER ?>/assets/nic_edit/nicEdit.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  	bkLib.onDomLoaded(function() {
  		new nicEditor({
  			buttonList : ['bold','italic','underline','html','ol','ul','link','unlink','xhtml']
  		}).panelInstance('noticia');
  	});
  </script>

