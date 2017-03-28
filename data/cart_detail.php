<?php
//根据客户端提交的登录用户名，返回当前登录用户的购物车的详情
header('Content-Type:application/json;charset=UTF-8');
@$uname=$_REQUEST['uname'] or die('{"msg":"err","reason":"uname required"}');
$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="SELECT uid FROM yoho_user WHERE uname='$uname'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row){
$uid=$row[0];
}else{
	die('{"msg":"err","reason":"uname non-exists"}');

}
//
$sql="SELECT cid FROM yoho_cart WHERE userId='$uid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row){//有购物车
$cid=$row[0];
}else{//无购物车
	die("[]");
}
//
$sql="SELECT pid,pname,pic1,price,count,did FROM yoho_product,yoho_cart_detail WHERE  yoho_product.pid=yoho_cart_detail.productId AND cartId='$cid'";
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($list);
//