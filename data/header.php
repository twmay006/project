<?php
	header('Content-Type:text/html;charset=UTF-8');
?>
	<div id="header">
			<div id="header-top">
				<div class="YOHO left">
					<span></span>
					<a href="#">YOHO!BUY有货</a>
					<ul class="group-list">
						<li><a href="#" class="yoho-group" data-en="YOHO!" data-cn="集团官网">YOHO!</a></li>
						<li><a href="#" class="yoho-group" data-en="YOHO!BOYS" data-cn="潮流男生">YOHO!BOYS</a></li>
						<li><a href="#" class="yoho-group"data-en="YOHO!GRILS" data-cn="潮流女生">YOHO!GIRLS</a></li>
						<li><a href="#" class="yoho-group" data-en="YOHO!SHOW" data-cn="物趣分享">YOHO!SHOW</a></li>
						<li><a href="#" class="yoho-group" data-en="YO'HOOD" data-cn="潮流嘉年华">YO！HOOD</a></li>
					</ul>
				</div>
				<ul class="top-list right">
					<li>
						<span>hi~</span>
						<a href="#" id="login">
							<span>[</span>请登录<span>]</span>
							<!--模态登录对话框-->
							<div class="modal" >
								<div class="modal-dialog">
									<div class="modal-content">
										<h4>用户登录</h4>
										<p class="alert">
											请在此处输入您的注册信息。
										</p>
										<form id="login-form">
											<input type="text" placeholder="请输入登录用户名" name="uname" value="" id="una" >
											<input type="password" placeholder="请输入登录密码" name="upwd" value="" id="pwd">
											<input type="button" value="提交登录信息" id="bt-login">
										</form>
									</div>
								</div>
							</div>
						</a>
						<a href="register.html">
							<span>[</span>免费注册<span>]</span>
						</a>
					</li>
					<li class="myyoho">
						<b></b>
						<a href="#">MY有货
							<span></span>
						</a>
					</li>
					<li class="myorder">
						<b></b>
						<span></span>
						<a href="#">我的订单</a>
					</li>
					<li class="mycollect">
						<b></b>
						<span></span>
						<a href="#">我的收藏</a>
					</li>
					<li class="message">
						<b></b>
						<span></span>
						<a href="#">消息</a>
					</li>
					<li class="phoneapp">
						<b></b>
						<span></span>
						<a href="#">手机版</a>
						<div class="top_sub_box">
							<div class="sub_bg"> </div>
							<p>扫描二维码</p>
							<p>下载有货客户端</p>
							<p>下载更多客户端>></p>
						</div>
					</li>
				</ul>
			</div>
		</div>
        <!--搜索框-->
		<div id="header-search">
			<div class="search">
				<div class="search_left left">
					<ul class="type">
						<li class="boys">
							<a href="#">
								<ul>
									<li class="size">男生</li>
									<li>BOYS</li>
								</ul>
							</a>
						</li>
						<li class="grils">
							<a href="#">
								<ul>
									<li class="size">女生</li>
									<li>GIRLS</li>
								</ul>
							</a>
						</li>
						<li class="kids">
							<a href="#">
								<ul>
									<li class="size">儿童</li>
									<li>KIDS</li>
								</ul>
							</a>
						</li>
						<li class="life_style">
							<a href="#">
								<ul>
									<li class="size">创意生活</li>
									<li>LIFE STYLE</li>
								</ul>
							</a>
						</li>
					</ul>
				</div>
				<div class="search_middle left">
				   <img class="front" src="images/logo-en.png">
					<img class="back" src="images/logo-cn.png">
				</div>
				<div class="search_right right">
					<div class="search_input">
						<form action="">
							<input type="text" placeholder="Jokester">
						</form>
					</div>
					<div id="shopping">
					<a href="#" id="shoppingcart">
						<img src="images/shopcar.jpg"></a>
					</div>
				</div>
			</div>
		</div>
        <!--导航栏   -->
		<div id="header_nav">
			<div class="nav">
					<ul class="nav_banner">
						<li><a href="#">新品到着</a></li>
						<li><a href="#">品牌一览</a></li>
						<li class="clothes">
							<a href="#">服饰
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="#">上装</a></li>
										<li><a class="red" href="#">羽绒服</a></li>
										<li><a class="red" href="#">夹克</a></li>
										<li><a class="red" href="#">卫衣</a></li>
										<li><a href="#">大衣/风衣</a></li>
										<li><a href="#">棉衣</a></li>
										<li class="blod"><a class="black" href="#">下装</a></li>
										<li><a class="red" href="#">休闲裤</a></li>
										<li><a class="red" href="#">牛仔裤</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="#">短裤</a></li>
										<li class="blod"><a class="black" href="#">经典款</a></li>
										<li><a class="red" href="#">圆领头套卫衣</a></li>
										<li><a class="red" href="#">学院风衬衫</a></li>
										<li><a href="#">街头风T袖</a></li>
										<li class="blod"><a class="black"  href="#">热门品牌</a></li>
										<li><a class="red" href="#">NAT.REVELATION</a></li>
										<li><a class="red" href="#">MIXSEVEN</a></li>
										<li><a class="red" href="#">LESSISGOOD</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a class="red" href="#">Improper</a></li>
										<li><a href="#">Eight Guys</a></li>
										<li><a href="#">preppy Elite</a></li>
										<li><a href="#">Ego Products</a></li>
										<li><a href="#">EVD</a></li>
										<li><a href="#">Madness</a></li>
										<li><a class="red"      href="#">BLACKJACK</a></li>
										<li><a href="#">Life·After Life</a></li>
										<li><a href="#">Jokester</a></li>	
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="images/banner_clothes.jpg"></dt>
										<dd>IN季新品全开售>></dd>
									</dl>
								</div>
							</div>
							</a>
						</li>
						<li class="shoes">
						<a href="#">鞋履
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="#">鞋履</a></li>
										<li><a class="red" href="#">休闲/运动鞋</a></li>
										<li><a  href="#">靴子</a></li>
										<li><a class="red" href="#">时装鞋</a></li>
										<li class="blod"><a class="black" href="#">热门款型</a></li>
										<li><a href="#">跑鞋</a></li>
										<li ><a href="#">帆布鞋</a></li>
										<li><a class="red" href="#">皮鞋</a></li>
										<li><a href="#">户外鞋</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li class="blod"><a class="black" href="#">热门品牌</a></li>
										<li><a  href="#">Ivyboi</a></li>
										<li><a class="red" href="#">GAWS FOOT</a></li>
										<li><a  href="#">masterplan</a></li>
										<li><a href="#">VANS
										</a></li>
										<li ><a href="#">New balance</a></li>
										<li><a class="red" href="#">FOSS</a></li>
										<li><a href="#">adidas Originals</a></li>
										<li><a href="#">Onitsuka Tiger</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a  href="#">Improper</a></li>
										<li><a href="#">Eight Guys</a></li>
										<li><a href="#">preppy Elite</a></li>
									
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="images/banner_shoe.jpg"></dt>
										<dd>最新火爆销售>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li class="bags"><a href="#">包袋
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="#">包</a></li>					<li><a  href="#">双肩包</a></li>
										<li><a class="red" href="#">手拎包/单肩包</a></li>
										<li><a  href="#">电脑包</a></li>
										<li><a href="#">钱包/卡包/手拿包</a></li>
										<li><a href="#">腰包</a></li>
										<li class="blod"><a class="black" href="#">热门款型</a></li>
										<li><a class="red" href="#">帆布背包</a></li>
										<li><a  href="#">拼色背包</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="#">街头款单肩包</a></li>
										<li ><a  href="#">多口袋双肩包</a></li>
										<li class="blod"><a class="black" href="#">热门品牌</a></li>
										<li><a class="red" href="#">Storm Stamps</a></li>
										<li><a href="#">Epiphqny </a></li>
										<li ><a  href="#">MACROPUS</a></li>
										<li><a class="red" href="#">LINSHI TASKS</a></li>
										<li><a href="#">Draconite</a></li>
										<li><a href="#">soundbyte</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a class="red" href="#">Comback</a></li>
										<li><a href="#">Epiphqny </a></li>
										<li><a href="#">jansport </a></li>
										<li><a href="#">F5So </a></li>
										<li><a href="#">VANS</a></li>
										<li><a href="#">Herschel Supply</a></li>
										<li><a class="red"      href="#">Inter Fool</a></li>	
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="images/banner_bag.jpg"></dt>
										<dd>出街必备背包袋集>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li class="access"><a href="#">配饰.其他
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="#">服配</a></li>
										<li><a class="red" href="#">太阳镜/眼镜</a></li>
										<li><a  href="#">帽子</a></li>
										<li><a class="red" href="#">袜子</a></li>
										<li><a href="#">手表</a></li>
										<li class="blod"><a class="black" href="#">首饰</a></li>
										<li ><a  href="#">戒指</a></li>
										<li><a href="#">耳钉</a></li>
										<li><a  href="#">手链</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="#">帽子</a></li>
										<li class="blod"><a class="black"href="#">配饰</a></li>
										<li><a class="red" href="#">皮带/腰带</a></li>
										<li><a href="#">胸针/胸章</a></li>
										<li><a href="#">手机链/钥匙扣</a></li>
										<li class="blod"><a class="black"  href="#">热门品牌</a></li>
										<li><a class="red" href="#">Pineal Body</a></li>
										<li><a href="#">CENA HOO</a></li>
										<li><a  href="#">CENA HOO</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a href="#">JONAS&VERUS唯路时</a></li>
										<li><a href="#"> 银鳞堂</a></li>
										<li><a href="#">STAYREAL </a></li>
										<li><a href="#">RASEN family</a></li>
										<li><a href="#">EVD</a></li>
										<li><a href="#">inmix</a></li>
										<li><a class="red"      href="#">MIRACLE KILL</a></li>
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="images/banner_accessories.jpg"></dt>
										<dd>热门小物件精选>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li><a href="#">领劵中心</a>
							<img src="images/new.jpg" alt=""/>
						</li>
						<li><a href="#">逛</a></li>
						<li><a href="#">SALE</a></li>
					</ul>
			</div>
		</div>
		