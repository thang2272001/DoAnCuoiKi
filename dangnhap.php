<?php
	session_start(); 
	if (isset($_SESSION['user_nhom3']) && $_SESSION['user_nhom3'] == "admin")
	{
		header("Location: /Nhom_3/quanlytintuc.php");
	}
?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<script type="text/javascript">
		function confirmLogin()
		{
			var username = document.frmLogin.username.value;
			var password = document.frmLogin.password.value;
			if (username == "" || password == "")
			{
				alert("Vui lòng nhập tên đăng nhập và mật khẩu");
			}
			else
			{
				document.frmLogin.login.value = true;
				document.frmLogin.submit();
			}
		}
	</script>
</head>
<body>
	<div>
		<h3>Đăng nhập</h3>
		<form action="" method="POST" name="frmLogin">
			<table>
				<tr>
					<td>Tên đăng nhập:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Mật khẩu:</td>
					<td>
						<input type="password" name="password">
					</td>
				</tr>
				<tr>
					<td colspan="2">c</td>
				</tr>
				<tr>
					<td><a href="">Quên mật khẩu?</a></td>
					<td><button name="login" value="login" onclick="confirmLogin()">Đăng nhập</button></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="dangnhap.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div id="wrapper">
        <form action="" id="form-login" name = "frmLogin">
            <h1 class="form-heading">Đăng nhập</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name = "user" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="Mật khẩu">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
			<div>
			<tr>
					<input type="checkbox" name="remember" value="1">Duy trì đăng nhập?
				</tr>
			</div>
            <input type="submit" value="Đăng nhập" class="form-submit">
        </form>
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

	<script type="text/javascript">
		function confirmLogin()
		{
			var username = document.frmLogin.username.value;
			var password = document.frmLogin.password.value;
			if (username == "" || password == "")
			{
				alert("Vui lòng nhập tên đăng nhập và mật khẩu");
			}
			else
			{
				document.frmLogin.login.value = true;
				document.frmLogin.submit();
			}
		}

		$(document).ready(function(){
    $('#eye').click(function(){
        $(this).toggleClass('open');
        $(this).children('i').toggleClass('fa-eye-slash fa-eye');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else{
            $(this).prev().attr('type', 'password');
        }
    });
});
	</script>
</html>
<?php
	if (!(isset($_SESSION['user_nhom3']) && $_SESSION['user_nhom3'] == "admin"))
	{
		include 'config.php';
		$username = "";
		$password = "";
		$count = 0;

		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
			if (isset($_POST['username']))
			{
				$username = $_POST['username'];
			}
			if (isset($_POST['password']))
			{
				$password = md5($_POST['password']);
			}
		}
		if (isset($_POST['login']) && $_POST['login'] == "true")
		{
			setcookie("login","login",time()+1);
			$sql = "SELECT * FROM quantrivien WHERE (tendangnhap = '$username' AND matkhau ='$password')";
			$result = mysqli_query($conn,$sql);
			$count =  mysqli_num_rows($result);
			if ($count > 0)
			{
				$_SESSION['user_nhom3'] = $username;
				header("Location: /Nhom_3/quanlytintuc.php");
			}
			else
			{
				echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
			}
		} 
	}
?>