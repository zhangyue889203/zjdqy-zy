<?php
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
include("conn.php");
$rs=mysql_query("select username from zzclogin where username='$username'");
$num=mysql_num_rows($rs);
if($num>0){
	echo'{"status":"20001","msg":"此用户名已经占用"}';
}else{
	echo '{"stauts":"10001","msg":"用户名可以使用"}';
}
mysql_free_result($rs);
mysql_close($conn);
?>