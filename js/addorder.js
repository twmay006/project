/***********购物车订单详情*************/
$(function(){
                $('#header').load('../data/header.php',function(){
                    //判断当前是否已经登录，修改欢迎消息
                    var uname=sessionStorage ['loginName'];
                    if(uname){
                        $('#login').html('欢迎登录：'+uname);
                    }
                });
				$('#footer').load('../data/footer.php');
            });
			
            //为支付方式的选择添加事件监听
            $('.payment-list').on('click','li',function(){
                $(this).addClass ('payment-item-selected').siblings ('.payment-item-selected').removeClass ('payment-item-selected');
                //再修改input[name=payment]值
                $(this).siblings(':hidden').val($(this).data('value'));//把li的data-value属性值赋值给隐藏域的value
            })

            //异步请求购物车中的内容，再次给用户呈现出来，同时计算商品总价格，修改name=price隐藏域的值
            $.ajax({
                type:'GET',
                url:'../data/cart_detail.php',
                data:{uname:sessionStorage['loginName'] },
                success:function(list){
                	if(typeof list=="string")return false;
                    var html='';
                    var sum=0;//购物车总金额
					var n=0;//购买数量
                    $.each(list,function(i,p){
                        sum+= p.price* p.count;
						n+=parseInt(p.count);
                        html+=`
                            <div class="goods-item">
                                        <div class="p-img">
                                            <a target="_blank" href=""><img src="${p.pic1}" alt=""></a>
                                        </div>
                                        <div class="p-name">
                                            <a href="" target="_blank">
                                                ${p.pname}
                                            </a>
                                        </div>
                                        <div class="p-price">
                                            <strong class="jd-price">${p.price}</strong>
                                            <span class="p-num">x${p.count}</span>
                                            <span class="p-state">有货</span>
                                        </div>
                                    </div>
                        `

                    });
                    $('.goods-items').html(html);
                    $('.price-num').html('￥'+sum);
                    $('input[name="price"]').val(sum);
					$('#warePriceId').html('￥'+sum);
					$('.ftx-01').html(n);
                }
           })
            //点击提交订单
            $('button.checkout-submit').click(function(){
                //获取所有用户的输入
                var str=$('#form-myorder').serialize ();
                str+='&uname='+sessionStorage ['loginName'];
                //异步提交用户输入数据
                $.ajax({
                    type:'POST',
                    url:'data/order_add.php',
                    data:str,
                    success:function(result){
                        console.log('异步请求成功');
                        console.log(result);
                        if(result.code==1){ //服务器端添加成功
                            //把生成的订单编号保存给下一个页面使用，页面跳转
                            sessionStorage['OrderId'] = result.orderId;
                            location.href="addorder_result.html";
                        }else { //服务器端添加失败
                            alert('订单生成失败！错误消息：'+result.msg);
                        }

                    },
                    error:function(result){
                        console.log("ktu"+result);
                    }
                })

            })