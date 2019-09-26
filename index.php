<!DOCTYPE html>
<html>
<head>
	<title>随便注</title>
</head>
<body>
<div>
	<form action="" method="GET">
		<input type="text" id="inject"  name="inject" value="1" />
		<input type="submit" value="查询"/>
		<input type="submit" name="x" value="重置数据库"/>
	</form>
</div>


<?php
error_reporting(0);
require("mysqli.php");
if(isset($_GET['x'])){require('create_mysql.php');}

if(isset($_GET['inject'])){
$inject=$_GET['inject'];
if (preg_match("/select|insert|update|drop|delete|where\./i", $inject)){
	die('return preg_match("/select|insert|update|drop|delete|where\./i", $inject);');
	exit();
}
else{
	$sql="SELECT * FROM words WHERE id = '$inject';";
	//echo $sql;
	if (mysqli_multi_query($conn, $sql)){
		do
    {
        // 存储第一个结果集
        if ($result=mysqli_store_result($conn))
        {
            while ($row=mysqli_fetch_row($result))
            {
                var_dump($row);
            }
            mysqli_free_result($result);
        }
    }
    while (mysqli_next_result($conn));
	}
	
}
$conn->close();
}
?>


</body>
</html>