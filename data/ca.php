<?php
//接收客户给提交的uname和pid，实现购物车
header('Content-Type:application/json;charset=UTF-8');
@$uname=$_REQUEST['uname'] or die('{"msg":"err","reason":"uname required"}');
@$pid=$_REQUEST['pid'] or die('{"msg":"err","reason":"pid required"}');
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
$sql="SELECT cid FROM yoho_cart WHERE userId='$uid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row){
	$cid=$row[0];
}else{
	$sql="INSERT INTO yoho_cart VALUES(NULL,'$uid')";
	mysqli_fetch_row($result);
	$cid=mysqli_insert_id($conn);
}
$sql="SELECT did,count FROM yoho_cart_detail WHERE cartId='$cid' AND productId='$pid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if(!$row){
		$count=1;
		$sql="INSERT INTO yoho_cart_detail VALUES(NULL,'$cid','$pid','$count')";
		mysqli_query($conn,$sql);

}else{
	$did=$row[0];
	$count=$row[1];
	$count++;
	$sql="UPDATE yoho_cart_detail SET count='$count' WHERE did='$did'";
	mysqli_query($conn,$sql);
	

}
echo ('{"msg":"succ","count":'.$count.'}');







