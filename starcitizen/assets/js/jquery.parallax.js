var movementStrength = 20;

var modA = 1;
var modB = 8;
var modC = 14;

var height = movementStrength / $(window).height();
var width = movementStrength / $(window).width();

$("html").mousemove(function(e){

		  var pageX = e.pageX - ($(window).width() / 2);
		  var pageY = e.pageY - ($(window).height() / 2);

		  var newvalueAX = modA * width * pageX * -1;
		  var newvalueAY = modA * height * pageY * -1;
		  var newvalueBX = modB * width * pageX * -1;
		  var newvalueBY = modB * height * pageY * -1;
		  var newvalueCX = modC * width * pageX * -1;
		  var newvalueCY = modC * height * pageY * -1;

		  $('#crossA').css("background-position", newvalueAX+"px "+newvalueAY+"px");
		  $('#crossB').css("background-position", newvalueBX+"px "+newvalueBY+"px");
		  $('#crossC').css("background-position", newvalueCX+"px "+newvalueCY+"px");
});
