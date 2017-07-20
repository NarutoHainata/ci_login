// base.js

$(document).ready(function(){
	

// 遍历该class下的所有a标签，并为每个元素添加函数
$('.navbar-nav').find('a').each(function(){

	// a标签里的href 是否等于 当前页面url 
	if (this.href == document.location.href || document.location.href.search(this.href) >= 0) {

		$(this).parent().addClass('active');
	}
});
	//保障点击logo回到主页推荐页
	var nah = document.getElementById("navbar-header");
	nah.onclick = function () {
	
	var fir = document.getElementById("fir");
	fir.addClass('active');
}
});