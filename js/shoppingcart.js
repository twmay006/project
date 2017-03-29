/********异步加载头部尾部**********/
$(function(){
//	if(!sessionStorage ['loginName']){
//	location.href="../index.html";
//	}
	$('#header').load('../data/header.php',function(){$('#login').html(sessionStorage ['loginName']+'的购物车');
	});
	$('#footer').load('../data/footer.php');
/********头部属性内容切换********/
	$('.yoho-group').mouseover(function(){
				$(this).html($(this).attr('data-cn'));
			});
	$('.yoho-group').mouseout(function(){
			  $(this).html($(this).attr('data-en'));
			});
});
/*购物车详情*/
	$.ajax({
		type:'GET',
		url:'../data/cart_detail.php',
		data:{uname:sessionStorage['loginName'] },
		success:function(list){
			var html="";
			var Price=0;
			if(list.msg==='err'||list.length==0){
				html='<tr><td colspan="6">您尚未添加任何商品到购物车！</td></tr>';
				return false;
			}
			$.each(list,function(i,p){
				Price+=p.price*p.count;
				html+=`
					<tr>
                    <td>
                        <input type="checkbox" id="sel"/>
                        <input type="hidden"  name="did" value="${p.did}"  />
                        <div><img src="${p.pic1}" alt=""/></div>
                    </td>
                    <td><a href="#">${p.pname}</a></td>
                    <td>￥${p.price}</td>
                    <td>
                        <button>-</button><input type="text" value="${p.count}"/><button>+</button>
                    </td>
                    <td><span >￥${p.price*p.count}</span></td>
                    <td><a href="${p.did}" name="delete">删除</a></td>
                </tr>	
			`;	
			})
				$('tbody').html(html);
				$('#cart_footer>div>span').html('￥'+Price);
		}
	
	})



//为+和-按钮添加事件监听，修改购买数量并异步提交到服务器端
$('#cart').on('click','button',function(){
	var count=$(this).siblings('input').val();
	if($(this).html()==='-'){
		if(count>1){
		count--;
		}
	}else if($(this).html()==='+'){
		count++;
	}
	$(this).siblings('input').val(count);
	var did=$(this).parent().siblings(':nth-child(1)').children(':hidden').val();
	var pic=parseInt($(this).parent().siblings(':nth-child(3)').html().substr(1,7));
	var total=$(this).parent().siblings(':nth-child(5)').children('span').html('￥'+pic*count);
	var that=this;
	$.ajax({
		type:'POST',
		url:'data/cart_update.php',
		data:{did:did,count:count},
		success:function(result){
			console.log('修改成功');
		}
	
	})
})

//删除
$('#cart').on('click','a[name="delete"]',function(e){
	e.preventDefault();
	var did = $(this).attr('href');
	var that=this;
	$.ajax({
		type:'POST',
		url:'data/cart_detail_delete.php',
		data:{did:did},
		success:function(result){
			if(result==='succ'){
				var con=confirm('此操作不可恢复，确定要删除吗');
				if(con){
				$(that).parent().parent().remove();
				}else{return;}
				
			}
		}
	
	})
})
//点击去结算，
$('#bt-gotobuy').click(function(){
	location.href='addorder.html';
})