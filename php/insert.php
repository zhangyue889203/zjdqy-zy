<?php
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$pwd=$_POST['pwd'];
$emall=$_POST['emall'];
$tele=$_POST['tele'];
include("conn.php");
$flag=mysql_query("insert into zzclogin (username,pwd,emall,tele) values('$username','$pwd','$emall','$tele')");
if($flag){
	echo'注册成功';
}else{
	echo '注册失败';
}
mysql_close($conn);
?>