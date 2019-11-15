<?php
// session_start();
header("content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$pwd=$_POST['pwd'];
include("conn.php");
$rs=mysql_query("select username,pwd from zzclogin where username='$username' and pwd='$pwd'");
$num=mysql_num_rows($rs);
if($num>0){
	$_SESSION['username']=$username;
	$_SESSION['login']='success';
	echo'{"status":"20001","msg":"登陆成功"}';
}else{
	echo '{"status":"10001","msg":"用户名或密码不正确"}';
}
mysql_free_result($rs);
mysql_close($conn);
?>