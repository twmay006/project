/*******异步加载头部和尾部*******/
	/*$("#header_box").load('data/header.php',function(){
					//判断当前是否已经登录，修改欢迎消息
					var uname=sessionStorage ['loginName'];
					if(uname){
						$('#login').html('欢迎登录：'+uname);
					}
				});
	$('#footer').load('data/footer.php');*/

/********头部功能实现*********/
	/********头部属性内容切换********/
	$('.yoho-group').mouseover(function () {
		$(this).html($(this).attr('data-cn'));
	});
	$('.yoho-group').mouseout(function () {
		$(this).html($(this).attr('data-en'));
	});
	/**********模态登录***********/
	$('#login').click(function (e) {
		e.preventDefault();
		$('.modal').css('display', 'block');
	});
	//登录验证

	$('#bt-login').click(function () {
		var uname = $('[name="uname"]').val();
		var upwd = $('[name="upwd"]').val();
		$.ajax({
			type: 'POST',
			url: 'data/login.php',
			data: {uname: uname, upwd: upwd},
			success: function (txt, msg, xhr) {
				if (txt === 'err') {
					$('.modal .alert').html('用户名或密码错误，请重试');
				} else if (txt === 'ok') {
					$('.modal').fadeOut(300);
					$('#login').html('欢迎登录:' + uname);
					sessionStorage.setItem('loginName', uname);//把登录用户名保存到全局
				} else {
					$('.modal').fadeOut(300);
				}
			}
		})

	})

	/**************产品列表*****************/
	$.ajax({
		type: 'GET',
		url: 'data/product_select.php',
		success: function (list, msg, xhr) {
			//console.log('开始处理响应数据');
			console.log(arguments);
			
			var html = "";
			for (var i = 0; i < list.length; i++) {
				var p = list[i];
				html += `
							<li>
								<a href="view/detail.html">
									<img src="${p.pic1}">
								</a>
								<div>
									<p>
										<a href="javascript:;">${p.pname}</a>
									</p>
									<p>
										￥${p.price}
									</p>
								</div>
								<p>
									<img src="${p.pic2}">
									<a href="${p.pid}" class="addcart">
										<img  src="${p.pic3}">
									</a>
								</p>
							</li>
						`;
			}
			$('.commodity').html(html);
		},
		error:function(err){
			console.log(err.message);
		}
	});

//提交到购物车
	$('.commodity').on('click', 'a.addcart', function (e) {
		e.preventDefault();
		var pid = $(this).attr('href');
		//把登录的用户名和产品编号异步提交给服务器
		$.ajax({
			type: 'POST',
			url: '../data/ca.php',
			data: {uname: sessionStorage['loginName'], pid: pid},
			success: function (result) {
				if (result.msg === 'succ') {
					alert('购买成功！该商品已购买的数量:' + result.count);
				} else {
					alert('购买成功！该商品已购买的数量:' + result.reason);
				}
			}

		});
	});

/**************轮播*************/
var Img=document.querySelector(".banner").getElementsByTagName('li');
Img[0].style.display="block";
var List=document.querySelector(".banner_list").getElementsByTagName('li');
//var btn=document.querySelector(".banner_button").getElementsByTagName('span');
		var c=0;
		function run()
		{
			c++;
			//图片轮播
			if(c==8)
			{
				c=0;
			}
			for(var i=0;i<8;i++)
			{
				//让所有图片隐藏
				Img[i].style.display = 'none';
				//让所有小图片透明度为0.7
				List[i].style.opacity="0.7";
			}
			//让c号图片显示
			Img[c].style.display = 'block';
			//让c号小图片还原透明度
			List[c].style.opacity="1";
		}
		//设置定时器
		var timer = setInterval(run,2000);
	
	//
	for(var i=0;i<List.length;i++){
     List[i].index=i;
     List[i].style.opacity="0.7";
     List[i].onmouseover=function(){
		clearInterval(timer);
        this.style.opacity="1";
        for(var j=0;j<Img.length;j++){
            Img[j].style.display='none';
        }
        Img[this.index].style.display='block';
     }
     List[i].onmouseout=function(){
        this.style.opacity="0.7";
		timer = setInterval(run,2000);
     };
 }


