<div id="logo" style = "font-size: 40px;">Logo<BR>here</div>	

<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION["current_user"])) { ?>
	<div id="logside">
	<a href = "login.php"><div class="log">Login</div></a>
	<a href = "#"><div class="log">Sign up</div></a>
	</div> <?php ;
}
else { ?>
	<div id="logside">
	<a href = "logout.php"><div class="log">Thoát</div></a>
	<div class="log">Xin chào! <?php echo $_SESSION["current_user"]->userName; ?></div>
	</div> <?php ;
}
?>