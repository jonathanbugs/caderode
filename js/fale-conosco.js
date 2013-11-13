$(document).ready(function(){
	init();
	validaForm();
	if (!isiPad && !isiPhone && !isiAndroid){
		showEstados();
		$('.scroll').jScrollPane({autoReinitialise: true});
	}
});

$(window).on('load', function(){
	initialize();
});

var map;
function initialize() {
	var styles = [
	{
		"featureType": "poi",
		"stylers": [
			{ "visibility": "off" }
		]
	},{
		"featureType": "landscape.natural",
		"stylers": [
			{ "color": "#009bb3" }
		]
	},{
		"featureType": "water",
		"stylers": [
			{ "color": "#00c2d4" },
			{ "visibility": "simplified" }
		]
	},{
		"featureType": "road.highway",
		"elementType": "geometry",
		"stylers": [
			{ "color": "#00899e" }
		]
	},{
		"featureType": "road.arterial",
		"elementType": "geometry",
		"stylers": [
			{ "color": "#00899e" }
		]
	},{
		"featureType": "road.local",
		"elementType": "geometry",
		"stylers": [
			{ "color": "#00899e" }
		]
	},{
		"featureType": "road.arterial",
		"elementType": "labels.text.stroke",
		"stylers": [
			{ "visibility": "off" }
		]
	},{
		"featureType": "road.arterial",
		"elementType": "labels.text.fill",
		"stylers": [
			{ "color": "#ffffff" }
		]
	},{
		"featureType": "road.local",
		"elementType": "labels.text.fill",
		"stylers": [
			{ "color": "#808080" },
			{ "visibility": "off" }
		]
	},{
		"featureType": "road.highway",
		"elementType": "labels.text.fill",
		"stylers": [
			{ "color": "#ffffff" }
		]
	},{
		"featureType": "road.highway",
		"elementType": "labels.text.stroke",
		"stylers": [
			{ "visibility": "off" }
		]
	}
	];

	var lat = -29.703236,
		lng = -51.204773;

	winW = $window.width();

	var LatLngCenter = new google.maps.LatLng(lat, lng),
		LatLngCaderode = new google.maps.LatLng(-29.703236, -51.204773);

	var marker, image,
		mapOptions = {
			zoom: 16,
			center: LatLngCenter,
			maxZoom: 16,
			scrollwheel: false,
			navigationControl: false,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			disableDefaultUI: true,
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'mapEstilos']
			}
		},
		styledMap = new google.maps.StyledMapType(styles, { name: "Estilos Mapa" });

	map = new google.maps.Map(document.getElementById("mapa"), mapOptions);
	image = new google.maps.MarkerImage($BASE_DIR+"img/icons/pin.png", null, null, null, new google.maps.Size(60,69));

	marker = new google.maps.Marker({
		map: map,
		draggable: false,
		icon: image,
		position: LatLngCaderode
	});

	map.mapTypes.set('mapEstilos', styledMap);
	map.setMapTypeId('mapEstilos');
}

function validaForm(){
	$('#formContato').validate({
		ignore: "",
		rules: {
			nome:     { required: true },
			empresa:  { required: true },
			telefone: { required: true },
			cidade:   { required: true },
			email:    { required: true, email: true },
			mensagem: { required: true }
		},

		submitHandler:function() {
			//cadastraContato();
		},
		errorContainer: $('#formContato .errorBox')
	});

	$('.btEnviarContato').on('click', function(){
		setTimeout(function(){
			$('label.error').siblings('label, span').css({'color':'#FF0000'});
		}, 100);
	});
}



function showEstados(){
	var tempo,
		listaSelect = $('.listaSelect');

	$('.btSelect').on('click', function() {
		listaSelect.slideToggle('fast');
		var ele = $(this);
		ele.find('.icone').toggleClass('iconeCima');
		ele.parent('.relativeEstado').toggleClass('relativeEstadoAberto');
	});

	listaSelect.on('mouseleave', function() {
		tempo = setInterval(function() {
			listaSelect.slideUp('fast');
			$('.btSelect').parent('.relativeEstado').removeClass('relativeEstadoAberto');
			$('.btSelect').find('.icone').removeClass('iconeCima');
			clearInterval(tempo);
		}, 1000);
	}).on('mouseover', function(){
		clearInterval(tempo);
	});

	$('.selectLink').on('click', function() {
		var $ele = $(this);
		var estado = $ele.html();
		$('.btSelect').parent('.relativeEstado').removeClass('relativeEstadoAberto');
		$('.btSelect').removeAttr('style').find('.txtSelect').html(estado);
		$('.btSelect').find('.icone').removeClass('iconeCima');
		$('input#estado').val(estado);

		listaSelect.slideUp('fast');
		clearInterval(tempo);
	});
}