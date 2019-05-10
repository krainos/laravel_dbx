$(function(){
	/*首页浮动定位*/
	$('.rightbar li').click(function(){
		$(this).addClass('floag_on').siblings().removeClass('floag_on')
		})	
})	
	
	
$(function () {
	
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$(".rightbar,.backtop").css('display', 'block');
		} else {
			$(".rightbar,.backtop").css('display', 'none');
		};
	});

});	


$(function() {
	$("#elevator").click(function(){
		$("html,body").animate({scrollTop: 0}, 500);	
	});		
});
	
	



