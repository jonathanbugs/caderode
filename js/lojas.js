$(document).ready(function(){
	init();
	if (!isiPad && !isiPhone && !isiAndroid){
		selectEstados();
		selectCidades();
		$('.scroll').jScrollPane({autoReinitialise: true});
	}
});

$(window).on('load', function(){
	initialize();
});


function selectEstados(){
	var tempo,
		listaSelect = $('.relativeEstado .listaSelect'),
		btSelect = $('.relativeEstado .btSelect');

	btSelect.on('click', function() {
		listaSelect.slideToggle('fast');
		var ele = $(this);
		ele.find('.icone').toggleClass('iconeCima');
		ele.parent('.relativeEstado').toggleClass('relativeEstadoAberto');
	});

	listaSelect.on('mouseleave', function() {
		tempo = setInterval(function() {
			listaSelect.slideUp('fast');
			btSelect.parent('.relativeEstado').removeClass('relativeEstadoAberto');
			btSelect.find('.icone').removeClass('iconeCima');
			clearInterval(tempo);
		}, 1000);
	}).on('mouseover', function(){
		clearInterval(tempo);
	});

	$('.relativeEstado .selectLink').on('click', function() {
		var $ele = $(this);
		var estado = $ele.html();
		btSelect.parent('.relativeEstado').removeClass('relativeEstadoAberto');
		btSelect.removeAttr('style').find('.txtSelect').html(estado);
		btSelect.find('.icone').removeClass('iconeCima');
		$('input#estado').val(estado);

		listaSelect.slideUp('fast');
		clearInterval(tempo);
	});
}

function selectCidades(){
	var tempo,
		listaSelect = $('.relativeCidade .listaSelect'),
		btSelect = $('.relativeCidade .btSelect');

	btSelect.on('click', function() {
		listaSelect.slideToggle('fast');
		var ele = $(this);
		ele.find('.icone').toggleClass('iconeCima');
		ele.parent('.relativeCidade').toggleClass('relativeCidadeAberto');
	});

	listaSelect.on('mouseleave', function() {
		tempo = setInterval(function() {
			listaSelect.slideUp('fast');
			btSelect.parent('.relativeCidade').removeClass('relativeCidadeAberto');
			btSelect.find('.icone').removeClass('iconeCima');
			clearInterval(tempo);
		}, 1000);
	}).on('mouseover', function(){
		clearInterval(tempo);
	});

	$('.relativeCidade .selectLink').on('click', function() {
		var $ele = $(this);
		var cidade = $ele.html();
		btSelect.parent('.relativeCidade').removeClass('relativeCidadeAberto');
		btSelect.removeAttr('style').find('.txtSelect').html(cidade);
		btSelect.find('.icone').removeClass('iconeCima');
		$('input#cidade').val(cidade);

		listaSelect.slideUp('fast');
		clearInterval(tempo);
	});
}







var infowindow = null,
	map = null,
	geocoder = null,
	myOptions = null,
	geoLat = null,
	geoLng = null,
	arrayMarkers = [];

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

	var lat = -29.3837920,
		lng = -50.87864390;

	winW = $window.width();

	var LatLngCenter = new google.maps.LatLng(lat, lng);

	var mapOptions = {
			zoom: 6,
			center: LatLngCenter,
			maxZoom: 6,
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

	map = new google.maps.Map(document.getElementById("mapaLojas"), mapOptions);
	infowindow = new google.maps.InfoWindow({
		content: "carregando..."
	});
	geocoder = new google.maps.Geocoder();

	setMarkers(map,lojas);

	map.mapTypes.set('mapEstilos', styledMap);
	map.setMapTypeId('mapEstilos');
}



function setMarkers(map, locations) {
	for (var i = 0; i < locations.length; i++) {
		var loc = locations[i];
		
		image = new google.maps.MarkerImage($BASE_DIR+"img/icons/pin.png", null, null, null, new google.maps.Size(60,69));
		
		if (loc[2]===false){
			geocoder.geocode( { 'address': loc[3] }, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					loc[2] = results[0].geometry.location.Xa,
					loc[3] = results[0].geometry.location.Ya;
				}
			});
		}
		var myLatLng = new google.maps.LatLng(loc[2], loc[3]);
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			icon: image,
			title: loc[1],
			zIndex: loc[4],
			html: loc[5],
			id: loc[0]
		});
		arrayMarkers[loc[0]] = marker;
		google.maps.event.addListener(marker, 'click', function (event) {
			infowindow.setContent(this.html);
			infowindow.open(map, this);
			map.setZoom(15);
			if(typeof event !== 'undefined'){
				map.setCenter(event.latLng);
				//ajaxMapa(this.id);
			}
		});
	}
}
