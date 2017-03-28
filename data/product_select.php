<?php
	header('Content-Type:application/json;charset=UTF-8');
	$conn=mysqli_connect('127.0.0.1','root','','yoho',3306);
	$sql="SET NAMES UTF8";
	mysqli_query($conn,$sql);
	$sql="SELECT * FROM yoho_product ";
	$result=mysqli_query($conn,$sql);
	$list=mysqli_fetch_all($result,1);
	echo json_encode($list);
