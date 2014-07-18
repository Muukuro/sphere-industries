	$(function(){
	
	  $('#crossA').css({backgroundPosition: '0px 0px'});
	  $('#crossB').css({backgroundPosition: '0px 0px'});
	  $('#crossC').css({backgroundPosition: '0px 0px'});
	
		$('#crossA').animate({
			backgroundPosition:"(-10000px -2000px)"
		}, 240000, 'linear');
		
		$('#crossB').animate({
			backgroundPosition:"(-10000px -2000px)"
		}, 120000, 'linear');
		
		$('#crossC').animate({
			backgroundPosition:"(-10000px -2000px)"
		}, 480000, 'linear');
		
	});