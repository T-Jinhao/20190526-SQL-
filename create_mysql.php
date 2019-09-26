<?php
require("mysqli.php");

$sql="DROP DATABASE supersqli;";
$result=mysqli_query($con,$sql);

$sql="CREATE DATABASE supersqli;";
$result=mysqli_query($con,$sql);
// if(!$result){echo "创建数据库失败";}

$sql1="CREATE TABLE IF NOT EXISTS `words`(".
	"id INT(3) NOT NULL AUTO_INCREMENT,".
	"data VARCHAR(100) NOT NULL,".
	"PRIMARY KEY(id)) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$sql2="CREATE TABLE IF NOT EXISTS `1919810931114514`(".
	  "flag VARCHAR(120) NOT NULL)".
	  "ENGINE=InnoDB DEFAULT CHARSET=utf8;";

$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
if(!$result1){echo "word表创建失败";}
if(!$result2){echo "1919810931114514表创建失败";}

$str1="INSERT INTO words(id,data) VALUES(1,'Only red tea'); ";
$str2="INSERT INTO words(id,data) VALUES(2,'I have a big planet');";
$str3="INSERT INTO `1919810931114514`(flag) VALUES('flag{a9e89c2ddeacd669ffef73c8708cd79e}');";
$res1=mysqli_query($conn,$str1);
$res2=mysqli_query($conn,$str2);
$res3=mysqli_query($conn,$str3);
if(!$res1){echo "数据1插入失败";}
if(!$res2){echo "数据2插入失败";}
if(!$res3){echo "数据3插入失败";}
$conn->close();
?>