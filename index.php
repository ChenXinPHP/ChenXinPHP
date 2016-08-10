<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title>ChenXinPHP</title>
	<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
	<div class="navbar">
		<div class="navtitle"><a href="index.php">ChenXinPHP</a></div>
		<div class="navright">
		<?php 
			$user = $_GET["user"];
			if ($user != "") {
				echo "Hello, $user";
			}
			else {
				echo "<a href='signin.html'>登录</a>";
				echo "<a href='signup.html'>注册</a>";
			}
		?>
		</div>
	</div>
	<div class="clearfloat"></div>
</body>
</html>