<?php
	header('Content-Type:text/html;charset=UTF-8');
?>
	<div id="header">
			<div id="header-top">
				<div class="YOHO left">
					<span></span>
					<a href="javascript:;">YOHO!BUY有货</a>
					<ul class="group-list">
						<li><a href="javascript:;" class="yoho-group" data-en="YOHO!" data-cn="集团官网">YOHO!</a></li>
						<li><a href="javascript:;" class="yoho-group" data-en="YOHO!BOYS" data-cn="潮流男生">YOHO!BOYS</a></li>
						<li><a href="javascript:;" class="yoho-group"data-en="YOHO!GRILS" data-cn="潮流女生">YOHO!GIRLS</a></li>
						<li><a href="javascript:;" class="yoho-group" data-en="YOHO!SHOW" data-cn="物趣分享">YOHO!SHOW</a></li>
						<li><a href="javascript:;" class="yoho-group" data-en="YO'HOOD" data-cn="潮流嘉年华">YO！HOOD</a></li>
					</ul>
				</div>
				<ul class="top-list right">
					<li>
						<span>hi~</span>
						<a href="../index.html" id="login">
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
						<a href="javascript:;">MY有货
							<span></span>
						</a>
					</li>
					<li class="myorder">
						<b></b>
						<span></span>
						<a href="javascript:;">我的订单</a>
					</li>
					<li class="mycollect">
						<b></b>
						<span></span>
						<a href="javascript:;">我的收藏</a>
					</li>
					<li class="message">
						<b></b>
						<span></span>
						<a href="javascript:;">消息</a>
					</li>
					<li class="phoneapp">
						<b></b>
						<span></span>
						<a href="javascript:;">手机版</a>
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
							<a href="javascript:;">
								<ul>
									<li class="size">男生</li>
									<li>BOYS</li>
								</ul>
							</a>
						</li>
						<li class="grils">
							<a href="javascript:;">
								<ul>
									<li class="size">女生</li>
									<li>GIRLS</li>
								</ul>
							</a>
						</li>
						<li class="kids">
							<a href="javascript:;">
								<ul>
									<li class="size">儿童</li>
									<li>KIDS</li>
								</ul>
							</a>
						</li>
						<li class="life_style">
							<a href="javascript:;">
								<ul>
									<li class="size">创意生活</li>
									<li>LIFE STYLE</li>
								</ul>
							</a>
						</li>
					</ul>
				</div>
				<div class="search_middle left">
				   <img class="front" src="../images/logo-en.png">
					<img class="back" src="../images/logo-cn.png">
				</div>
				<div class="search_right right">
					<div class="search_input">
						<form action="">
							<input type="text" placeholder="Jokester">
						</form>
					</div>
					<div id="shopping">
					<a href="javascript:;" id="shoppingcart">
						<img src="../images/shopcar.jpg"></a>
					</div>
				</div>
			</div>
		</div>
        <!--导航栏   -->
		<div id="header_nav">
			<div class="nav">
					<ul class="nav_banner">
						<li><a href="javascript:;">新品到着</a></li>
						<li><a href="javascript:;">品牌一览</a></li>
						<li class="clothes">
							<a href="javascript:;">服饰
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="javascript:;">上装</a></li>
										<li><a class="red" href="javascript:;">羽绒服</a></li>
										<li><a class="red" href="javascript:;">夹克</a></li>
										<li><a class="red" href="javascript:;">卫衣</a></li>
										<li><a href="javascript:;">大衣/风衣</a></li>
										<li><a href="javascript:;">棉衣</a></li>
										<li class="blod"><a class="black" href="javascript:;">下装</a></li>
										<li><a class="red" href="javascript:;">休闲裤</a></li>
										<li><a class="red" href="javascript:;">牛仔裤</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="javascript:;">短裤</a></li>
										<li class="blod"><a class="black" href="javascript:;">经典款</a></li>
										<li><a class="red" href="javascript:;">圆领头套卫衣</a></li>
										<li><a class="red" href="javascript:;">学院风衬衫</a></li>
										<li><a href="javascript:;">街头风T袖</a></li>
										<li class="blod"><a class="black"  href="javascript:;">热门品牌</a></li>
										<li><a class="red" href="javascript:;">NAT.REVELATION</a></li>
										<li><a class="red" href="javascript:;">MIXSEVEN</a></li>
										<li><a class="red" href="javascript:;">LESSISGOOD</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a class="red" href="javascript:;">Improper</a></li>
										<li><a href="javascript:;">Eight Guys</a></li>
										<li><a href="javascript:;">preppy Elite</a></li>
										<li><a href="javascript:;">Ego Products</a></li>
										<li><a href="javascript:;">EVD</a></li>
										<li><a href="javascript:;">Madness</a></li>
										<li><a class="red"      href="javascript:;">BLACKJACK</a></li>
										<li><a href="javascript:;">Life·After Life</a></li>
										<li><a href="javascript:;">Jokester</a></li>	
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="../images/banner_clothes.jpg"></dt>
										<dd>IN季新品全开售>></dd>
									</dl>
								</div>
							</div>
							</a>
						</li>
						<li class="shoes">
						<a href="javascript:;">鞋履
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="javascript:;">鞋履</a></li>
										<li><a class="red" href="javascript:;">休闲/运动鞋</a></li>
										<li><a  href="javascript:;">靴子</a></li>
										<li><a class="red" href="javascript:;">时装鞋</a></li>
										<li class="blod"><a class="black" href="javascript:;">热门款型</a></li>
										<li><a href="javascript:;">跑鞋</a></li>
										<li ><a href="javascript:;">帆布鞋</a></li>
										<li><a class="red" href="javascript:;">皮鞋</a></li>
										<li><a href="javascript:;">户外鞋</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li class="blod"><a class="black" href="javascript:;">热门品牌</a></li>
										<li><a  href="javascript:;">Ivyboi</a></li>
										<li><a class="red" href="javascript:;">GAWS FOOT</a></li>
										<li><a  href="javascript:;">masterplan</a></li>
										<li><a href="javascript:;">VANS
										</a></li>
										<li ><a href="javascript:;">New balance</a></li>
										<li><a class="red" href="javascript:;">FOSS</a></li>
										<li><a href="javascript:;">adidas Originals</a></li>
										<li><a href="javascript:;">Onitsuka Tiger</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a  href="javascript:;">Improper</a></li>
										<li><a href="javascript:;">Eight Guys</a></li>
										<li><a href="javascript:;">preppy Elite</a></li>
									
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="../images/banner_shoe.jpg"></dt>
										<dd>最新火爆销售>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li class="bags"><a href="javascript:;">包袋
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="javascript:;">包</a></li>					<li><a  href="javascript:;">双肩包</a></li>
										<li><a class="red" href="javascript:;">手拎包/单肩包</a></li>
										<li><a  href="javascript:;">电脑包</a></li>
										<li><a href="javascript:;">钱包/卡包/手拿包</a></li>
										<li><a href="javascript:;">腰包</a></li>
										<li class="blod"><a class="black" href="javascript:;">热门款型</a></li>
										<li><a class="red" href="javascript:;">帆布背包</a></li>
										<li><a  href="javascript:;">拼色背包</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="javascript:;">街头款单肩包</a></li>
										<li ><a  href="javascript:;">多口袋双肩包</a></li>
										<li class="blod"><a class="black" href="javascript:;">热门品牌</a></li>
										<li><a class="red" href="javascript:;">Storm Stamps</a></li>
										<li><a href="javascript:;">Epiphqny </a></li>
										<li ><a  href="javascript:;">MACROPUS</a></li>
										<li><a class="red" href="javascript:;">LINSHI TASKS</a></li>
										<li><a href="javascript:;">Draconite</a></li>
										<li><a href="javascript:;">soundbyte</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a class="red" href="javascript:;">Comback</a></li>
										<li><a href="javascript:;">Epiphqny </a></li>
										<li><a href="javascript:;">jansport </a></li>
										<li><a href="javascript:;">F5So </a></li>
										<li><a href="javascript:;">VANS</a></li>
										<li><a href="javascript:;">Herschel Supply</a></li>
										<li><a class="red"      href="javascript:;">Inter Fool</a></li>	
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="../images/banner_bag.jpg"></dt>
										<dd>出街必备背包袋集>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li class="access"><a href="javascript:;">配饰.其他
							<div class="nav_sub_box">
								<div class="nav_sub">
									<ul class="nav_sub_type left">
										<li class="blod"><a class="black" href="javascript:;">服配</a></li>
										<li><a class="red" href="javascript:;">太阳镜/眼镜</a></li>
										<li><a  href="javascript:;">帽子</a></li>
										<li><a class="red" href="javascript:;">袜子</a></li>
										<li><a href="javascript:;">手表</a></li>
										<li class="blod"><a class="black" href="javascript:;">首饰</a></li>
										<li ><a  href="javascript:;">戒指</a></li>
										<li><a href="javascript:;">耳钉</a></li>
										<li><a  href="javascript:;">手链</a></li>
									</ul>
									<ul class="nav_sub_style left">
										<li><a href="javascript:;">帽子</a></li>
										<li class="blod"><a class="black"href="javascript:;">配饰</a></li>
										<li><a class="red" href="javascript:;">皮带/腰带</a></li>
										<li><a href="javascript:;">胸针/胸章</a></li>
										<li><a href="javascript:;">手机链/钥匙扣</a></li>
										<li class="blod"><a class="black"  href="javascript:;">热门品牌</a></li>
										<li><a class="red" href="javascript:;">Pineal Body</a></li>
										<li><a href="javascript:;">CENA HOO</a></li>
										<li><a  href="javascript:;">CENA HOO</a></li>
									</ul>
									<ul class="nav_sub_brand left">
										<li><a href="javascript:;">JONAS&VERUS唯路时</a></li>
										<li><a href="javascript:;"> 银鳞堂</a></li>
										<li><a href="javascript:;">STAYREAL </a></li>
										<li><a href="javascript:;">RASEN family</a></li>
										<li><a href="javascript:;">EVD</a></li>
										<li><a href="javascript:;">inmix</a></li>
										<li><a class="red"      href="javascript:;">MIRACLE KILL</a></li>
									</ul>
									<dl class="nav_sub_img left">
										<dt><img src="../images/banner_accessories.jpg"></dt>
										<dd>热门小物件精选>></dd>
									</dl>
								</div>
							</div>
						</a></li>
						<li><a href="javascript:;">领劵中心</a>
							<img src="../images/new.jpg" alt=""/>
						</li>
						<li><a href="javascript:;">逛</a></li>
						<li><a href="javascript:;">SALE</a></li>
					</ul>
			</div>
		</div>
		