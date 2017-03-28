/**功能点1：若没有登录，则跳转到登录页面**/
	if(!sessionStorage ['loginName']){
                    location.href="yoho.html";
                }
/**功能点2：异步加载页头和页尾**/
$('#header').load(('data/header.php'), function () {
  $('#login').html('欢迎登录：' + sessionStorage ['loginName']);
});
$('#footer').load('data/footer.php');
/**功能点3：显示出上一页面保存的订单编号**/
$('#orderId').html( sessionStorage['OrderId'] );
