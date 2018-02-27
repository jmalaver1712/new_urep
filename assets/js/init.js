// SLIDER PRINCIPAL
jQuery("#slider_main").layerSlider({
	skin: 'outline',
	thumbnailNavigation: true,
	pauseOnHover: true,
	globalBGSize: 'auto',
	// slideBGPosition: '50% 0%',
	navStartStop: false,
	hoverBottomNav: true,
	showCircleTimer: true,
	skinsPath: '../assets/slider/skins/',
	plugins: ['origami']
});

// FUNCIONES MATERIALICE
(function($){
	$(function(){
		$('.modal').modal({
			startingTop: '25%', // Starting top style attribute
			endingTop: '25%' // Ending top style attribute
		});
		$('select').material_select();
		$('.collapsible').collapsible();
		$(".button-collapse").sideNav();
		$('input#input_text, textarea#resumen').characterCounter();
    	$('.parallax').parallax();
    	$('ul.tabs').tabs();

  }); 
})(jQuery);




// MENU PRINCIPAL
$(".enlace_menu").click(function() {
	var x = $(this).attr("name");

	if ($(x).hasClass("mostrar") === true){
		$(".menu_det").addClass("ocultar").removeClass("mostrar");
		$(x).addClass("ocultar").removeClass("mostrar");
	}
	else{
		if ($(x).hasClass("ocultar") === true){
			$(".menu_det").addClass("ocultar").removeClass("mostrar");
			$(x).removeClass("ocultar").addClass("mostrar");
		}else{
			$(x).addClass("ocultar").removeClass("mostrar");
		}
	}
});

$('.enlace_menu').click(function (e) {
	e.stopPropagation();
});

// SUB MENUS 
$('.enlace_menu_2').click(function (e) {
	e.stopPropagation();
});

$('.enlace_menu_2').click(function (e) {
	
	$(".programas").addClass("ocultar").removeClass("mostrar");

	var x = $(this).attr("name");

	if ($(x).hasClass("mostrar") === true){
		$(x).addClass("ocultar").removeClass("mostrar");
	}
	else{
		$(x).addClass("mostrar").removeClass("ocultar");
	}
});


// FORMULARIO INFORMACION
$("#btn_informacion").click(function(){
	if ($("#solicita_info").hasClass("activa_form") === true){
		$("#solicita_info").removeClass("activa_form");
		$("#form_informacion").addClass("mostrar").removeClass("ocultar");
	}else{
		$("#solicita_info").addClass("activa_form");
		$("#form_informacion").addClass("ocultar").removeClass("mostrar");	
	}
});

$("#cerrar_info").click(function(){
	$("#btn_informacion").addClass("ocultar");
	$("#solicita_info").addClass("ocultar");
	$("#form_informacion").addClass("ocultar");
	$("#cerrar_info").addClass("ocultar");
});


$("html").click(function() {
	$('.menu_det').addClass("ocultar").removeClass("mostrar");
});


// ANIMACION DE LOS ATAJOS
$(".atajo").hover(
  function() {
    var name_1 = $(this).attr('name');
    var src_1 = $(this).attr('src');
    $(this).attr('src', name_1);
    $(this).attr('name', src_1);
  },function() {
	var name_2 = $(this).attr('name');
	var src_2 = $(this).attr('src');
	$(this).attr('src', name_2);
	$(this).attr('name', src_2);
  }
);


// CAPTCHA - FORMULARIO
var correctCaptcha = function(response) {
	$('#btn_form_info').removeAttr("disabled");
	$('#form_info').attr('action', 'http://academiaurepublicana.org/cur5/mercadeo8.php');
};


// LIBROS ELECTRONICOS - CITAR
$( "#select_cita" ).change(function () {
	$('.citacion').addClass("ocultar");
	var x = $(this).val();
	$('#'+ x).removeClass("ocultar");
}).change();

// ENLACES INTERNACIONAL
$('.enlace_urep').click(function (e) {
	e.stopPropagation();
});

$(".enlace_urep").click(function(){
	var href = $(this).attr("name");
	$(".content_urep").addClass("ocultar").removeClass("mostrar");
	$(href).removeClass("ocultar").addClass("mostrar");
});

// ENLACES INTERNACIONAL 2
$(".enlace_inter").click(function(e){
	e.preventDefault();
	var id = $(this).attr("name");
	$(".content_inter").addClass("ocultar").removeClass("mostrar");
	$(id).removeClass("ocultar").addClass("mostrar");

	$('html, body').animate({
        scrollTop: $(id).offset().top - 150
    }, 500);
});

// FORMULARIO INFORMACION
$(".tab").click(function(){
	$(".content_inter").addClass("ocultar").removeClass("mostrar");
});


$('.confirmar_url').on('click', function () {
    return confirm('¿ Esta Seguro ?');
});


// ORDENAR
$(".orden_not").change(function() {
	var id = $(this).attr("name");
	var orden = $(this).val();
	var accion = "ordenar";

	var formData = {id:id,orden:orden,accion:accion};

	var url = "../admin/control/control_noticias_eventos.php"; // El script a dónde se realizará la petición.
	$.ajax({
		type: "POST",
		url: url,
		data: formData,
	success: function(data){
		// alert( "ID = "+id+" Orden = "+data);
	}
	});
});