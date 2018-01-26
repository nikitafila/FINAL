$(document).ready(function(){
	$('.single-match-result').hide();
	$('.title-single').click(function(){
		$(this).next().slideToggle('slow');
	});
});

$(document).ready(function(){
	$('.single-combi').hide();
	$('.title-combi').click(function(){
		$(this).next().slideToggle('slow');
	});
});