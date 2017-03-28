/*******异步加载头部和尾部*******/
$(function(){
	$("#header_box").load('../data/header.php');
	$('#footer').load('../data/footer.php');
});
/*******悬浮对应显示*************/
var Img1 =document.querySelectorAll(".content_bigimg")[0].getElementsByTagName('img');
var Img2 =document.querySelectorAll(".content_bigimg")[1].getElementsByTagName('img');
var List1=document.querySelectorAll(".content_smallimg")[0].getElementsByTagName('li');
var List2=document.querySelectorAll(".content_smallimg")[1].getElementsByTagName('li');

Img1[0].style.display="block";
Img2[0].style.display="block";
for(var i=0;i<List1.length;i++){
	List1[i].index=i;
	List1[i].onmouseover=function(){
		for(var j=0;j<Img1.length;j++){
			Img1[j].style.display="none";
		}
		Img1[this.index].style.display="block";
	}
}
for(var l=0;l<List2.length;l++){
	List2[l].index = l;
	List2[l].onmouseover = function () {
		for (var m = 0; m < Img2.length; m++) {
			Img2[m].style.display = "none";
		}
		Img2[this.index].style.display = "block";
	}
}
/************放大镜**********/
var left=document.getElementById('left'),
	box=document.getElementById('box'),
	right=document.getElementById('right'),
	rpic=document.getElementById('rpic'),
	cover=document.getElementById('cover');

/*获取移动的指针坐标 添加移动事件而不是移入事件*/
cover.onmousemove=function(e){
	/*    var e = window.event || e;   这个也是IE低版本兼容的写法*/
	var mouse_top=e.offsetY;
	var mouse_left=e.offsetX;
	/*chrome：

	 e.pageX——相对整个页面的坐标
	 e.layerX——相对当前坐标系的border左上角开始的坐标
	 e.offsetX——相对当前坐标系的border左上角开始的坐标
	 e.clientX——相对可视区域的坐标
	 e.x——相对可视区域的坐标
	 */
	document.title=mouse_left+'|'+mouse_top; /*为了在窗口端上面看到当前鼠标位置*/

	var box_left = mouse_left-100;
	var box_top = mouse_top-100;

	if(box_left<0){
		box_left=0;
	}
	if(box_left>200){
		box_left=200;
	}
	if(box_top<0){
		box_top=0;
	}
	if(box_top>200){
		box_top=200;
	}

	box.style.left = box_left+'px'; /*注意字符串拼接的问题*/
	box.style.top = box_top+'px';

	/*鼠标右边移动 右边图片就要向左移动
	 box离左边多远 右边就要离左边2倍距离远,左移动是负值*/
	var rpic_left = -box_left*2;
	var rpic_top = -box_top*2;

	rpic.style.left = rpic_left+'px';
	rpic.style.top = rpic_top+'px';

}
/*必须要重新写个鼠标移入事件，不然加载完页面后直接就出来了默认放大镜效果*/
cover.onmouseover = function(){
	box.style.display = 'block';
	right.style.display = 'block';
}
cover.onmouseout = function(){
	box.style.display = 'none';
	right.style.display = 'none';
}


/*********选择颜色点击切换***************/
var Color=document.querySelector(".choice_color").getElementsByTagName("img");
var Show=document.querySelectorAll(".content_left");
Show[0].style.display="block";
Color[0].setAttribute("class","add-border");
for(var i=0;i<Color.length;i++){
	Color[i].index=i;
	Color[i].onclick = function () {
		for(var s=0;s<Show.length;s++){
			Show[s].style.display="none";
		}
		Show[this.index].style.display="block";
		for(j=0;j<Color.length;j++){
			Color[j].removeAttribute("class","add-border");
		}
		this.setAttribute("class", "add-border");
	}
}
/*******选择尺码*********/
var Size=document.querySelector(".choice_size").getElementsByTagName("u");
for(var i=0;i<Size.length;i++){
	Size[i].onclick=function(){
		for(var j=0;j<Size.length;j++){
			Size[j].style.color="#8e8e8e";
			Size[j].style.background="#fff";
		}
		this.style.color="#fff";
		this.style.background="#3a3a3a";
	}
}
/*************选择数量***************/
var Num=document.querySelector(".choice_number p").getElementsByTagName("img");
var Nm=document.querySelector(".choice_number span");
var x=1;
for(var i=0;i<Num.length;i++){
	Num[i].index=i;
	Num[i].onclick=function(){
		if(this.index==0){
			x++;
			Nm.innerHTML=x;
		}else{
			if(Nm.innerHTML>1){
				x--;
				Nm.innerHTML=x;
			}else{
				Nm.innerHTML=1;
			}
		}

	}
}