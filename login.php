<?php 
header("Content-Type: text/html; charset=UTF-8");

$userName = $_POST["userName"];
$password = $_POST["password"];
if ($userName == "admin" && $password == "123456") {
	// echo "登录成功！";
	header("location:index.php?user=$userName");
	exit;
}
else {
	echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
}
?>