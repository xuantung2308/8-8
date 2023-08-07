<!DOCTYPE html>
<html>
	<head>
		<title >LOGIN</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<?php
			require('function.php');
		?>

	</head>
	<body>
		<form action="login.php" method="post">
			<h2 style="color: #55acee; float: left; " ><b>Đăng nhập</h2></b><br><br>
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>		

			<label style="float: right;">Chưa có tài khoản?&ensp;<a href="reform.php" >Đăng ký</a></label>
			<input type="text" name="uname" placeholder="Tên đăng nhập"><br>
			<input type="password" name="password" placeholder="Mật khẩu" id="password">
			<u><div id = "btn" type = "button" onclick='showhidden("password","btn")' class="showhidden" style="right: 8px; top: -32px;">Hiện</div></u><br>

			<button type="submit" class="button">Đăng nhập</button>
		</form>
	</body>
</html>