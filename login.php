<?php
	session_start();
	if (!isset($_SESSION["loged"])) {
		$_SESSION["loged"] = 0;
	}

	require_once 'config.php';
	$flag = 1;
	$checkInfo = 1;
	if (isset($_POST["btnLogin"])) {
		$username = $_POST["txtUserName"];
		$password = $_POST["txtPassword"];
		//enc_password = $password;//md5($password);
		if ($username == "" || $password == "") {
			$checkInfo = 0;
		}
		else {
			$sql = "select * from users where userName = '$username'"; //and userPwd = '$enc_password'";
			$rs = load($sql);
			if ($rs->num_rows > 0) {
				$_SESSION["current_user"] = $rs->fetch_object();
				$_SESSION["loged"] = 1;
				header("Location: index.php");
			}
			else {
				$flag = 0;
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<br>
	<br>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<form method="post" action="">

                <?php if(!$flag) { ?>
                <label><?php if(!$flag) echo "Có lỗi" ?></label>
				<?php }?>
				
				<?php if (!$checkInfo) { ?>
				<label><?php if(!$checkInfo) echo "Thông tin không được để trống" ?></label>
				<?php }?>
                
					<div class="form-group">
						<label for="txtUserName">Tên đăng nhập</label>
						<input type="text" class="form-control" id="txtUserName" name="txtUserName" placeholder="John">
					</div>
					<div class="form-group">
						<label for="txtPassword">Mật khẩu</label>
						<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="******">
					</div>

<div  class="captcha">
	<div class="spinner">

		<label>
			<input type="checkbox" onclick="$(this).attr('disabled','disabled');">
			<span class="checkmark"><span>&nbsp;</span></span>
		</label>
	</div>
	<div class="text">
		I'm not a robot
	</div>
	<div class="logo">
		<img src="https://forum.nox.tv/core/index.php?media/9-recaptcha-png/" width="10%" />
		<p>reCAPTCHA</p>
		<small>Privacy - Terms</small>
	</div>
</div>
<div>
	<span class="msg-error error"></span>
<div id="recaptcha" class="g-recaptcha" data-sitekey="6Ld4Jh8TAAAAAD2tURa21kTFwMkKoyJCqaXb0uoK"></div>

<button class="btn" id="btn-validate">Đăng nhập</button>
					
				</form>
			</div>
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	
</body>
</html>