$("#service_foot1").click(function(){
	window.history.go(-1);
})
$("#service_foot2").click(function(){
	$(".service_share").fadeIn(500);
})
$(".service_share").click(function(){
	$(this).fadeOut(500);
})