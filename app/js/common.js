$(document).ready(function(){
	$('.single-match-result').hide();
	$('.single-match').click(function(){
		$(this).next().slideToggle('slow');
	});
});