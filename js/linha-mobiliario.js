$(document).ready(function(){
	init();
	fotosLinha();
	scrollCategorias();
});

function fotosLinha(){
	$('.fotosLinha').cycle();

	var numeroImagens = $('.linkFotos').size(),
		linkFotos = $('.linkFotos'),
		tamanhoFoto1 = '99%',
		tamanhoFoto2 = '48%',
		tamanhoFoto3 = '32.66%';

	console.log(numeroImagens);

	if(numeroImagens == 1) {
		linkFotos.css('width', tamanhoFoto1);
	}
	else if(numeroImagens == 2) {
		linkFotos.css('width', tamanhoFoto2);
	}
	else {
		linkFotos.css('width', tamanhoFoto3);
	}

}

/* =========
   SCROOL
   ========= */
function scrollCategorias(){
	$(".ancorasUl").localScroll({
		duration: 800,
		easing: 'easeInOutExpo',offset: {
			top: -85
		}
	});
}

