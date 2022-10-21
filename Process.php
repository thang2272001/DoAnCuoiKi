<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		$username = $_REQUEST["user"];
		$password = $_REQUEST["pass"];
		$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
		mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");
		$sql_login = "Select * from nguoi_dung where tai_khoan ='$username' and mat_khau = '$password'";
		$result = mysqli_query($conn,$sql_login);
		$row=mysqli_fetch_array($result);
		if($row['tai_khoan'] == $username && $row['mat_khau'] == $password){
			header("Location: Admin.php");
		}else{
			header("Location: Login.php");
		}
	?>
</body>
</html>