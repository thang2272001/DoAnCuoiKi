<?php
session_start();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<script
		  src="https://kit.fontawesome.com/64d58efce2.js"
		  crossorigin="anonymous"
	></script>
	<link rel="stylesheet" href="assets/css/login.css" />
</head>

<body>
<?php
  include 'dbcon.php';
  if(isset($_POST['login'])){
    $user = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT * FROM dbfood WHERE username = '$user' AND password = '$password' ";
    $query = mysql_query($conn, $sql);

    $row = mysql_num_rows($query);
    if($row ==1){
      echo "Đăng nhập thành công ";
      $_SESSION['username'] = $username;
      header('location: index.php');
    }else{
      echo "Đăng nhập thất bại";
      header('location: login.php');
    }
  }
?>




	<div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <!-- Đăng nhập -->
          <form action="" name="frmLogin" class="sign-in-form" method="post" >
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="txtUsername"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="txtPassword"/> 
            </div>
            <input type="button" value="Login" class="btn solid" name="Login" onclick="confirmLogin();" />
            <p class="social-text">Hoặc đăng nhập bằng </p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <!-- Đăng ký -->
          <form action="sign_up.php" class="sign-up-form" name="frmSignUp">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Tài khoản đăng nhập" name="txtUsername_up" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="txtEmail_up" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mật khẩu" name="txtPassword_up" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Nhập lại mật khẩu" name="txtPassword-retype_up" />
            </div>
            <input type="button" class="btn" value="ĐĂNG KÝ" name="do-register" onclick="checkSignUp();" />
            <p class="social-text">Hoặc đăng kí bằng</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Đăng kí tài khoản mới</h3>
            <p>
              Hãy đăng kí tài khoản mới để có thể tiếp tục sử dụng ứng dụng của chúng tôi một cách chọn vẹn.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="assets/img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Đã có tài khoản</h3>
            <p>
              Nếu bạn đã có tài khoản hãy đăng nhập để tiếp tục sử dụng.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="assets/img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="assets/js/app.js"></script>
</body>
</html>
<script type="text/javascript">
		function confirmLogin()
		{
			var username = document.frmLogin.txtUsername.value;
			var password = document.frmLogin.txtPassword.value;
      
			if (username == "" || password == "")
			{
        if (username == "" && password == "")
        {
          alert("Vui lòng nhập tên đăng nhập và mật khẩu");
        }
				else 
        {
          if (username == "" ) alert("vui lòng nhập tên đăng nhập");
          if (password == "" ) alert("vui lòng nhập mật khẩu");
        }
			}
			else
			{
				document.frmLogin.Login.value = true;
				document.frmLogin.submit();
			}
		}

    function checkSignUp()
    {
      var username = document.frmSignUp.txtUsername_up.value;
			var password = document.frmSignUp.txtPassword_up.value;
      var email = document.frmSignUp.txtEmail_up.value;
			var password_re = document.frmSignUp.txtPassword-retype_up.value;
			if (username == "" || password == ""|| password_re ==""||email="")
			{
        if (username == "" && password == "" && password_re =="" && email="")
        {
          alert("Vui lòng nhập đầy đủ thông tin");
        }
				else 
        {
          if (username == "" ) alert("vui lòng nhập tên đăng nhập");
          if (password == "" ) alert("vui lòng nhập mật khẩu");
          if (email == "" ) alert("vui lòng nhập email");
          if (password_re == "" ) alert("vui lòng nhập lại mật khẩu");
        }
			}
			else
			{
				document.frmSignUp.do-register.value = true;
				document.frmSignUp.submit();
			}
    }
</script>