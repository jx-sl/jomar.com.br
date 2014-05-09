/****************************
*	Jx Solucoes				*
*	www.jxsolucoes.com.br	*
*	julio.fg@live.de		*
*	+55 (51) 9665 5842		*
****************************/

var set = {
	header : function(){
		var sizeW = $("body").width();
		if(sizeW>=970){
			$(".navbar-left, .navbar-right").css({"display":"block"});	
			$("#logo h1").removeAttr("class").addClass("normal");
			$("nav").removeAttr("class").addClass("menuNormal").addClass("bgYellow");
			$(".btn-toggle").css({"display":"none"});
			$(".nav-mobile").hide();
			$(".facebook-box, footer .container div.jx").addClass("text-right");
		}else if(sizeW<970&&sizeW>=750){
			$(".navbar-left, .navbar-right").css({"display":"block"});	
			$("#logo h1").removeAttr("class").addClass("menor");
			$("nav").removeAttr("class").addClass("menuMenor").addClass("bgYellow");
			$(".btn-toggle").css({"display":"none"});
			$(".nav-mobile").hide();
			$(".facebook-box, footer .container div").addClass("text-right");
		}else{
			$(".navbar-left, .navbar-right").css({"display":"none"});
			$("#logo h1").removeAttr("class").addClass("mobile");
			$("nav").removeAttr("class").addClass("menuMobile").removeClass("bgYellow");
			$(".btn-toggle").css({"display":"block"});
			$(".facebook-box, footer .container div").removeClass("text-right");
		}
	},
	menuActive: function(){
		var classe = $("body").attr("id");
		$("."+classe).parent().addClass("active");
	}
};

$(function(){
	set.header();
	$("#btn-toggle").click(function(){
		$(".nav-mobile").toggle();
	});
	$(window).resize(function(){
		set.header();
	});
	set.menuActive();
});