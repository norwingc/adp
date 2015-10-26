
$(".menu-icon").click(function () {
	$(this).toggleClass("menu-animation");

	$(".nav-list").toggle("easing", function() {
		$(".nav-list").toggleClass("nav-animation");
		$(".nav-list").removeClass("hidden");
	});
});

$('.mobil').addClass("hidden-sm hidden-md hidden-lg");
$('.computer').addClass('hidden-xs');

console.log($(window).width());

$('.right').click(function(){
	
	
	if($(this).data('position') == 'first'){//voy al segundo
		$('.first').css('margin-left', '-100%');
		$('.second').css({'margin-left' :  '0'})
		$('.three').css({'margin-left' :  '100%'})
		$('.four').css({'margin-left' :  '200%'})
	}else if($(this).data('position') == 'second'){
		$('.first').css('margin-left', '-100%');
		$('.second').css({'margin-left' :  '-100%'})
		$('.three').css({'margin-left' :  '0'})
		$('.four').css({'margin-left' :  '100%'})
	}else{
		$('.first').css('margin-left', '-200%');
		$('.second').css({'margin-left' :  '-200%'})
		$('.three').css({'margin-left' :  '-100%'})
		$('.four').css({'margin-left' :  '0'})
	}



});


$('.left').click(function(){	
	
	if($(this).data('position') == 'three'){//voy al segundo
		$('.first').css('margin-left', '-100%');
		$('.second').css({'margin-left' :  '0'})
		$('.three').css({'margin-left' :  '100%'})
		$('.four').css({'margin-left' :  '200%'})
	}else if($(this).data('position') == 'second'){//voy al primero
		$('.first').css('margin-left', '0');
		$('.second').css({'margin-left' :  '100%'})
		$('.three').css({'margin-left' :  '200%'})
		$('.four').css({'margin-left' :  '300%'})
	}else{ // voy al tercero
		$('.first').css('margin-left', '-200%');
		$('.second').css({'margin-left' :  '-100%'})
		$('.three').css({'margin-left' :  '0'})
		$('.four').css({'margin-left' :  '100%'})
	}

});