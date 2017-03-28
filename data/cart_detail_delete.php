<?php
header('Content-Type:text/plain;charset=UTF-8');
@$did=$_REQUEST['did'] or die('did required');
$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="DELETE FROM yoho_cart_detail WHERE did='$did'";
$result=mysqli_query($conn,$sql);
if($result===false){
	echo "err";
}else{
	echo "succ";
}