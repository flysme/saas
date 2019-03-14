<?php
// echo 11111111;
$db_host = "127.0.0.1";//localhost
$db_user = "root";//用户名
$db_pwd = "D8B7d904e33e";//密码
$db_name = "saas";//数据库名
//链接数据库代码
$links = new mysqli($db_host,$db_user,$db_pwd,$db_name);
!mysqli_connect_error() or die("连接失败！！");
$res = $links->query("SELECT * FROM product");
$arr = mysqli_fetch_assoc($res);
var_dump($arr);
 ?>
