/*
*1.取出父级元素的所有子元素
*2.装进一个数组
*3.计算屏幕宽度除以图片宽度可以容纳多少个
*4.设置父元素的宽度
*/
/*
*1.获取第一行高度最低的图片的index以及高度
*2.设置下一行第一个的位置为绝对位置，距上为第一行第一位置的高度，距左为最低图片的offsetLeft
*3.设置完绝对位置，此时的下一行的所有图片都会在这个绝对位置上面，所以重新设置高度数组里面最低高度图片的高度为：绝对位置图片高度加上最低图片高度
*/
/*
*1.监听滚动事件
*2.获取屏幕高度，获取滚动高度
*3.获取最后一张图的距上高度offsetTop
*4.设置刷新条件，屏幕高度加上滚动高度>最后一张图的距上高度
*5.创建json数组
*6.循环创建<div class="box">
		<div class="box_img"><img src="img1.jpg"></div>
		</div>
*7.添加完后执行一遍设置高度和绝对位置，此时实现瀑布流
*/

window.onload = function() {
	imgLocation("container","box");
	var jsonData = {"data":[{"src":"img2.jpg"},{"src":"img3.jpg"},{"src":"img4.jpeg"},{"src":"img5.jpeg"},{"src":"img6.jpg"},{"src":"img7.jpg"},{"src":"img8.jpg"},{"src":"img9.jpg"}]};
	window.onscroll = function(){
		if (is_flag) {
			for (var i = 0; i < jsonData.data.length; i++) {
				var ccontent = document.createElement("div");
				ccontent.className = "box";
				document.getElementById("container").appendChild(ccontent);

				var boximg = document.createElement("div");
				boximg.className = "box_img";
				ccontent.appendChild(boximg);

				var img = document.createElement("img");
				// console.log(jasonData.data[i].src);
				img.src = jsonData.data[i].src;
				boximg.appendChild(img);
			};
		};
		imgLocation("container","box");
	}
}
//判断是否需要加载
function is_flag(){

	//获取滑动
	var scrollHeight = document.scrollTop();
	//获取屏幕高度
	var screenHeight = document.documentElement.clientHeight;
	//获取最后一张图片距顶部高度:1.获取最后一张图片
	var contentImg = getChildElement("container","box");
	var lastImg = contentImg[contentImg.length-1];
	var lastHeight = lastImg.offsetTop;
	if (lastHeight<screenHeight + screenHeight) {return true;};
}
function imgLocation(parent,content) {
	//将parent下内容全部取出
	var cparent = document.getElementById(parent);
	var content = getChildElement(parent,content);
	// console.log(content);
	var imgWidth = content[0].offsetWidth;
	var cols = Math.floor(document.documentElement.clientWidth/imgWidth);
	console.log(cols);
	cparent.style.cssText = "width:"+imgWidth*cols+"px;margin:0px auto";

	var boxHeightArr = [];
	
	for (var i = 0; i < content.length; i++) {
		if (i<cols) {
			boxHeightArr[i] = content[i].offsetHeight;
		}
		else{
			var minHeight = Math.min.apply(null,boxHeightArr);
			var indexMin = getMinIndex(boxHeightArr,minHeight);
			content[i].style.position = "absolute";
			content[i].style.top = minHeight+"px";
			content[i].style.left = content[indexMin].offsetLeft+"px";
			boxHeightArr[indexMin] = boxHeightArr[indexMin] + content[i].offsetHeight;
		}
	}	

}
function getMinIndex(boxHeightArr,minHeight){
	for(var i in boxHeightArr){
		if (boxHeightArr[i] == minHeight) {
			indexMin = i;
			
		}}
		return indexMin;
}
function getChildElement(parent,content) {
	var contentArr = [];
	var allContent = document.getElementsByTagName("*");
	for (var i = 0; i < allContent.length; i++) {
		if (allContent[i].className == content) {
			contentArr.push(allContent[i]);
		}
	}
	return contentArr;
}