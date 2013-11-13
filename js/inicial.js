$(document).ready(function(){
	init();
	banner();
});

$(window).on('resize', function(){
	banner();
});

function banner(){
	$('.banner').cycle();
}

