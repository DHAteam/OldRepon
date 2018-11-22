<?php
        session_start();
        if (!isset($_SESSION["loged"])) {
            $_SESSION["loged"] = 0;
        }
        require_once 'config.php';
        $checkInfo = 1;
        $checkNotExist = 1;
		if (isset($_POST["btnLogin"])) {
  			$username = $_POST["txtUserName"];
  			$password = $_POST["txtPassword"];
 			$name = $_POST["txtName"];
  			$email = $_POST["txtEmail"];
			if ($username == "" || $password == "" || $name == "" || $email == "") {
                $checkInfo = 0;
            }
            else {
  					$sql="select * from users where username='$username'";
					$rs = load($sql);
                
					if ($rs->num_rows > 0) {
						$checkNotExist = 0;
                    }
                    else {
	    				$sqlquery = "insert into users(userName,userPwd,userFullName,userEmail) values ('$username','$password','$name','$email')";
                        $add = load($sqlquery);
                        $_SESSION["current_user"]->userName = $username;
				        $_SESSION["loged"] = 1;   
				   		header("Location: index.php");
					}
			  }
	}
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
                
                <?php if(!$checkNotExist) { ?>
                <label><?php if(!$checkNotExist) echo "Tài khoản đã tồn tại" ?></label>
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
                    <div class="form-group">
						<label for="txtName">Tên:</label>
						<input type="text" class="form-control" id="txtName" name="txtName" placeholder="John">
					</div>
					<div class="form-group">
						<label for="txtEmail">Email</label>
						<input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="abc@gmail.com.vn">
					</div>
					
					<button type="submit" class="btn btn-success btn-block" name="btnLogin">
						<span class="glyphicon glyphicon-user"></span>
						Đăng ký
					</button>

				</form>
			</div>
		</div>
	</div>
	<script src="assets/jquery-3.1.1.min.js"></script>
	<script src="assets/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>