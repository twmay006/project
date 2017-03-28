<?php
header('Content-Type:application/json;charset=UTF-8');
@$uname=$_REQUEST['uname'] or die('{"code":3,"msg":"uname required"}');
@$upwd=$_REQUEST['upwd'] or die('{"code":4,"msg":"upwd required"}');
$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
$sql="SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql="INSERT INTO yoho_user VALUES(NULL,'$uname','$upwd')";
$result=mysqli_query($conn,$sql);
$output=[];
if($result===false){
	$output['code']=2;
	$output['msg']='insert err';
	$output['sql']=$sql;
}else{
	$output['code']=1;
	$output['msg']='insert succ';
	$output['sql']=mysqli_insert_id($conn);
}
echo json_encode($output);

