/* ============
   FUNCOES GERAIS
   ============ */
function linkExterno(){
	$('a[rel=blank]').click(function(){
		window.open(this.href);
		return false;
	});
}

function placeHolder(){
	$('.input, .textarea').on('keyup',function(){
		if($(this).val()===''){ $(this).prev().show(); }
	}).on('keydown',function(){
		$(this).prev().hide();
	}).on('change',function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	}).on('focusout',function(){
		$(this).prev().fadeTo(0,1);
		if ($(this).val()===''){ $(this).prev().show(); $(this).parent().find('.erro').show(); } else { $(this).prev().hide(); $(this).parent().find('.erro').hide(); }
	}).on('focusin',function(){
		if ($(this).val()===''){ $(this).prev().show(); $(this).prev().fadeTo(0,0.3); } else { $(this).prev().hide(); }
	}).each(function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	});
}

function linguagem(){
	$('.btLang').on('click', function(){
		// <a href="javascript:;" class="btLang en" data-idioma="en">EN</a>
		var lang = $(this).attr('data-idioma');
		$.cookie($CLIENTE+'_linguagem', lang, { expires: 365, path: '/' });
		window.location.reload();
	});
}

function selectPersonalizado(){
	$('.selectPrs').css('opacity', 0).on('change', function(){
		var ele = $(this);
		var val = ele.find('option:selected').text();
		ele.prev().text(val);
	});
}

function radioPersonalizado(){
	$('.radioPrs').css('opacity', 0).on('change', function(){
		var ele = $(this);
		var eleName = ele.attr('name');
		if(ele.is(':checked')){
			$('input[name="'+eleName+'"]').parent().removeClass('checked');
			ele.parent().addClass('checked');
		} else {
			ele.parent().removeClass('checked');
		}
	});

	$('.labelRadio').on('click', function(e){
		e.preventDefault();
		$(this).children('input').trigger('click');
	});
}

function checkboxPersonalizado(){
	$('.checkPrs').css('opacity', 0).on('change', function(){
		var ele = $(this);
		if(ele.is(':checked')){
			ele.parent().addClass('checked');
		} else {
			ele.parent().removeClass('checked');
		}
	});

	$('.labelCheck').on('click', function(e){
		e.preventDefault();
		$(this).children('input').trigger('click');
	});
}

function filePersonalizado(){
	$('.filePrs').css('opacity', 0).on('change', function(){
		var ele = $(this);
		var val = ele.val();
		ele.prev().text(val);
	});
}

var $window = $(window);
var windowHeight = $window.height();
var windowWidth = $window.width();




/* ============
   FUNCOES PROJETO
   ============ */
function init(){
	placeHolder();
	selectPersonalizado();
	filePersonalizado();
	showErros();
	imgRetina();
	abrirMenu();
	menuFixo();
	menuDrop();
	abrirBusca();
	modal();
	validaFormModalLojista();
	validaFormModalTrabalhe();
	if (isiPhone){
		$window.scrollTop(1);
	}

	if (!isiPad && !isiPhone && !isiAndroid){
		selectEstadosRodape();
		selectCidadesRodape();
		showEstadosModal();
		$('.scroll').jScrollPane({autoReinitialise: true});
	}
}



$(window).on('resize', function(){
	windowHeight = $window.height();
	windowWidth = $window.width();
	menuFixo();
	menuDrop();
});




/* ============
   PAGINA DE ERROS
   ============ */
function showErros(){
	$('#boxErro').stop().animate({
		height: 220
	}, 500, 'linear');

	$('.btClose').on('click', function(){
		$('#boxErro').stop().animate({
			height: 0
		}, 200, 'linear');

		$('.containerErro').delay(50).hide();
	});

	$('.btFade').hover(function(){
		$(this).children('span').stop().fadeTo(200,1);
	}, function(){
		$(this).children('span').stop().fadeTo(200,0);
	});

	$('.boxAtualize').stop().animate({
		marginLeft: 0,
		opacity: 1
	}, 500, 'easeOutElastic');

	$('.boxTxtAtualize').stop().delay(220).animate({
		opacity: 1
	}, 500, 'linear');

	$('.btDownload').stop().delay(220).animate({
		right: 0,
		opacity: 1
	}, 500, 'easeInOutBack');

	$('.btClose').stop().delay(220).animate({
		top: 10,
		opacity: 1
	}, 500, 'easeInOutBack');
}



/* ============
   RETINA
   ============ */
function imgRetina(){
	Retina = function() {
		return {
			init: function(){
				var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
				if (pixelRatio > 1) {
					$("img").each(function(idx, el){
						el = $(el);
						if (el.attr("data-src2x")) {
							el.attr("src", el.attr("data-src2x"));
						}
					});
				}
			}
		};
	}();
	Retina.init();
}



/* ============
   MENU MOBILE
   ============ */
function abrirMenu(){
	var divMenu = $('.blocoMenu');
	
	$('.btMenu').on('click', function() {
		var ele = $(this);
		$('html, body').addClass('menuAberto');

		ele.addClass('btMenuAberto');
		$('.blocoBuscar').show();

		if (divMenu.is(":hidden")) {
			divMenu.slideDown(300);
		} 
	});

	$('.btFecharMenu').on('click', function() {
		divMenu.slideUp(10);
		$('.btMenu').removeClass('btMenuAberto');
		$('.blocoBuscar').hide();
		$('html, body').removeClass('menuAberto');
	});
}



/* ============
   MENU FIXO
   ============ */
function menuFixo(){
	if (windowWidth > 1023){
		if (!isiPad && !isiPhone && !isiAndroid){
			var header = $('#header'),
				containerMenu = $('.logoMenu .containerGeral');
			$(window).on('scroll',function() {
				var scr = $(window).scrollTop();
				if (scr >= 1) {
					header.addClass('headerFixo');

				} else {
					header.removeClass('headerFixo');
				}
			});
		}
	}
}



/* ============
   MENU DROP DOWN
   ============ */
function menuDrop(){
	if (windowWidth > 1023){
		var menuDrop = $('.menuProdutos');

		if (!isiPad && !isiPhone && !isiAndroid){
			$('.menuLinkDrop').on('click', function() {
				var ele = $(this);
				menuDrop.addClass('menuDropAberto');
				$('.menuLinkDrop').removeClass('menuLinkDropAtivo');
				ele.addClass('menuLinkDropAtivo');
			});

			$('.btFecharMenuDrop').on('click', function() {
				menuDrop.removeClass('menuDropAberto');
				$('.menuLinkDrop').removeClass('menuLinkDropAtivo');
			});

			$(".tabsMenuLink").on('click', function(e){
				var tab = $(this),
					dataLista,
					listaProdutosMenu = $('.menuProdutos');

				$('.tabsMenuLink').removeClass('tabsMenuLinkAtivo');
				tab.addClass('tabsMenuLinkAtivo');

				dataLista = tab.attr('data-tipo');
				console.log(dataLista);

				listaProdutosMenu.find('.listaProdutosUl').hide();
				listaProdutosMenu.find('#'+dataLista).css({
					'display': 'inline-block'
				});
			});	
		}
	}
}




/* ============
   ABRE BUSCA
   ============ */
function abrirBusca(){
	if (windowWidth > 1023){
		if (!isiPad && !isiPhone && !isiAndroid){

			var blocoBusca = $('.blocoBuscar');
			
			$('.btBuscar').on('click', function() {
				$('.navMenu, .linksUl').hide();
				$('.blocoBuscar').animate({
					width: 835	
				}, 200);
			});

			$('.fecharBusca').on('click', function() {
				$('.navMenu, .linksUl').show();
				$('.blocoBuscar').animate({
					width: 0	
				}, 10);
			});
		}
	}
}




/* ============
   SELECTS RODAPE
   ============ */
function selectEstadosRodape(){
	var tempo,
		listaSelect = $('.formBuscaLoja .relativeEstado .listaSelectRodape'),
		btSelect = $('.formBuscaLoja .relativeEstado .btSelect');

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

	$('.formBuscaLoja .relativeEstado .selectLink').on('click', function() {
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

function selectCidadesRodape(){
	var tempo,
		listaSelect = $('.formBuscaLoja .relativeCidade .listaSelectRodape'),
		btSelect = $('.formBuscaLoja .relativeCidade .btSelect');

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

	$('.formBuscaLoja .relativeCidade .selectLink').on('click', function() {
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




/* ============
   MODAL
   ============ */
function modal(){
	$(".btModal").fancybox({
		maxWidth	: 620,
		minWidth    : 270,
		fitToView	: false,
		width		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',

		autoScale         : false,
		autoDimensions    : false,
		helpers : {
			overlay : {
				css : { 'overflow' : 'auto' }
			}
		}
	});
}


function showEstadosModal(){
	var tempo,
		listaSelectModal = $('.listaSelectModal');

	$('.btSelectModal').on('click', function() {
		listaSelectModal.slideToggle('fast');
		var ele = $(this);
		ele.find('.icone').toggleClass('iconeCima');
		ele.parent('.relativeModalEstado').toggleClass('relativeModalEstadoAberto');
	});

	listaSelectModal.on('mouseleave', function() {
		tempo = setInterval(function() {
			listaSelectModal.slideUp('fast');
			$('.btSelectModal').parent('.relativeModalEstado').removeClass('relativeModalEstadoAberto');
			$('.btSelectModal').find('.icone').removeClass('iconeCima');
			clearInterval(tempo);
		}, 1000);
	}).on('mouseover', function(){
		clearInterval(tempo);
	});

	$('.selectLink').on('click', function() {
		var $ele = $(this);
		var estado = $ele.html();
		$('.btSelectModal').parent('.relativeModalEstado').removeClass('relativeModalEstadoAberto');
		$('.btSelectModal').removeAttr('style').find('.txtSelectModal').html(estado);
		$('.btSelectModal').find('.icone').removeClass('iconeCima');
		$('input#estadoLojista').val(estado);

		listaSelectModal.slideUp('fast');
		clearInterval(tempo);
	});
}


function validaFormModalLojista(){
	$('#formLojista').validate({
		ignore: "",
		rules: {
			nomeLojista:     { required: true },
			telefoneLojista: { required: true },
			emailLojista:    { required: true, email: true },
			cidadeLojista:   { required: true },
			mensagemLojista: { required: true }
		},

		submitHandler:function() {
			//();
		},
		errorContainer: $('.formModal .errorBox')
	});

	$('#formLojista .btEnviarContato').on('click', function(){
		setTimeout(function(){
			$('label.error').siblings('label, span').css({'color':'#FF0000'});
		}, 100);
	});
}

function validaFormModalTrabalhe(){
	$('#formTrabalhe').validate({
		ignore: "",
		rules: {
			nomeTrabalhe:     { required: true },
			telefoneTrabalhe: { required: true },
			emailTrabalhe:    { required: true, email: true },
			cargoTrabalhe:    { required: true },
			mensagemTrabalhe: { required: true }
		},

		submitHandler:function() {
			//();
		},
		errorContainer: $('.formModal .errorBox')
	});

	$('#formTrabalhe .btEnviarContato').on('click', function(){
		setTimeout(function(){
			$('label.error').siblings('label, span').css({'color':'#FF0000'});
		}, 100);
	});
}


