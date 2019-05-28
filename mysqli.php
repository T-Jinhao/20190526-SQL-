<?php
/**
可以修改以下四个参数
*/
$servername='localhost:3306';
$username='';  #自行修改
$password='';  #自行修改
$database='supersqli';


$conn=mysqli_connect($servername,$username,$password,$database)or die("数据库连接错误".mysqli_connect_error());

?>