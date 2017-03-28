<?php
//header('Content-Type:application/json;charset=UTF-8');
header('Content-Type: application/json;charset=UTF-8');
//接收客户端提交的订单数据
@$rcvName=$_REQUEST['rcvName'] or die('{"code":2,"msg":"rcvName required"}');
@$addr=$_REQUEST['addr'] or die('{"code":2,"msg":"addr required"}');
@$payment=$_REQUEST['payment'] or die('{"code":2,"msg":"payment required"}');
@$price=$_REQUEST['price'] or die('{"code":2,"msg":"price required"}');
$orderTime=time()*1000;
$status=1;
@$uname=$_REQUEST['uname'] or die('{"code":2,"msg":"uname required"}');
$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
$sql="SET NAMES UTF8";
mysqli_query ($conn,$sql);
//订单所购买的商品需要到购物车详情表中查找
//SQL1:根据用户名查询用户编号
$sql="SELECT uid FROM yoho_user WHERE uname='$uname'";
$result=mysqli_query($conn,$sql);
$userId =mysqli_fetch_assoc($result)['uid'];
//SQL2:向订单表中添加一条新纪录，获取该订单的自增编号
$sql="INSERT INTO yoho_order VALUES(NULL,'$rcvName','$addr','$price','$payment','$orderTime','$status','$userId')";
$result=mysqli_query($conn,$sql);
$orderId=mysqli_insert_id ($conn);

//SQL3:查询当前用户购物车中所有商品及其购买数量
$sql="SELECT productId,count FROM yoho_cart_detail WHERE cartId=(SELECT cid FROM yoho_cart WHERE userId='$userId')";
$result=mysqli_query($conn,$sql);
$productList=mysqli_fetch_all($result,MYSQLI_ASSOC);


//SQL4：循环执行：向订单详情表中插入记录
foreach($productList as $p){
    $sql="INSERT INTO yoho_order_detail VALUES(NULL,'$orderId','$p[productId]','$p[count]')";
    mysqli_query($conn,$sql);
 }
//SQL5：删除当前用户购物车中的内容
$sql="DELETE FROM yoho_cart_detail WHERE cartId=(SELECT cid FROM yoho_cart WHERE userId='$userId') ";
mysqli_query($conn,$sql);
echo '{"code":1,"msg":"succ","orderId":'.$orderId.'}';