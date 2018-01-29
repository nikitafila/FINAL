$(document).ready(function(){
	$('.single-match-result').hide();
	$('.title-single').click(function(){
		$(this).next().slideToggle('slow');
	});
});

$(document).ready(function(){
	$('.single-combi').hide();
	$('.title-single-1').click(function(){
		$(this).next().slideToggle('slow');
	});
});

$(document).ready(function(){
	$('.full-year-stat').hide();
	$('#year').click(function(){
		$(this).next().slideToggle('slow');
	});
});