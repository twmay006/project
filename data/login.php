<?php
header('Content-Type:text/plain;charset=UTF8');
@$uname=$_REQUEST['uname'] or die('uname required');
@$upwd=$_REQUEST['upwd'] or die('upwd requeired');
$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
$sql='SET NAMES UTF8';
mysqli_query($conn,$sql);
$sql="SELECT uid FROM yoho_user WHERE uname='$uname' AND upwd='$upwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row===null){
	echo 'err';
}else{
	echo "ok";
}

