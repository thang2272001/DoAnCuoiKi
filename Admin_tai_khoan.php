<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ADMIN</title>
<link rel="stylesheet" type="text/css" href="Style_admin.css">
</head>

<body>
	<div class="head">
		<table  width="100%">
			<tr>
				<td width="300px" align="center">	
				<a href="">
					<img src="ảnh/37123974_1787574851295795_6939990757411389440_n.jpg" height="150px">
				</a>
				</td>
				<td>
					<div class="title">
						Kim SuShi Admin
					</div>
				</td>
				<td width="200px">&nbsp;</td>
			</tr>
		</table>
	</div>
	<div class="menu">
		<ul>
			<li><a href="">Quản lý tài khoản ▼</a>
				<ul class="submenu">
					<li><a href="Admin_tai_khoan.php">Tài Khoản</a>
					<li><a href="Login.php">Đăng xuất</a>
				</ul>
			</li>
			<li><a href="">Quản lý Menu ▼</a>
				<ul class="submenu">
					<li><a href="Admin_menu_ssm.php">Sashimi và Sushi</a>
					<li><a href="Admin_menu_salad.php">Salad</a>
					<li><a href="">Cơm</a>
					<li><a href="">Món Ciên và Món Nướng</a>
					<li><a href="">Lẩu và Mỳ</a>
					<li><a href="">Đồ uống</a>
				</ul>
			</li>
		</ul>
	</div>
	<br>
	<div class="main" align="center">
		<form name="nguoi_dung" method="post" action="Nguoi_dung_them_save.php" enctype="multipart/form-data">
	<table border="1" align="center" width="80%">
		<tr>
			<td colspan="2" align="center">THÊM NGƯỜI DÙNG</td>
		</tr>
		<tr>
			<td width="200">Họ tên</td>
			<td ><input type="text" class="text" name="txtHoten" ></td>
		</tr>
		<tr>
			<td width="200">Tài khoản</td>
			<td ><input type="text" class="text" name="txtTK" ></td>
		</tr>
		<tr>
			<td width="200">Mật khẩu</td>
			<td ><input type="text" class="text" name="txtMK" ></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="button" value="  OK   " onClick="check_input()"> <input type="reset" value="Cancel"></td>
		</tr>
	</table>
	</form>
	</div>
	<br>
	<?php
	$conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
	mysqli_select_db($conn,"kimsushi") or die ("Không tìm thấy CSDL");	
	$sql_select="Select * from `nguoi_dung`";
	$result=mysqli_query($conn,$sql_select);
	$tong_bg=mysqli_num_rows($result);
	$stt=0;
	while($row=mysqli_fetch_object($result))
	{
		$stt++;
		$id[$stt]=$row->id_taikhoan;
		$hoten[$stt]=$row->ho_ten;
		$user[$stt]=$row->tai_khoan;
		$pass[$stt]=$row->mat_khau;
	}
	?>
	<div class="main" align="center">
	<table border="1" width="80%">
  		<tr>
    		<td colspan="7" align="center">DANH MỤC TÀI KHOẢN</td>
  		</tr>
  		<tr>
    		<td width="38" align="center">STT</td>
    		<td width="300" align="center">Họ tên</td>
    		<td width="300" align="center">Tên đăng nhập</td>
			<td width="300" align="center">Mật khẩu</td>
    		<td colspan="2" align="center"><a href="Nguoi_dung_them.php">Thêm món</a></td>
  		</tr>
  		<?php
 		for($i=1;$i<=$tong_bg; $i++)
  			{
  		?>
  		<tr>
    		<td align="center"><?php echo $i;?></td>
    		<td align="center"><?php echo $hoten[$i]?></td>
    		<td align="center"><?php echo $user[$i]?></td>
			<td align="center"><?php echo $pass[$i]?></td>
    		<td width="50" align="center"><a href="Nguoi_dung_edit.php?id_nd=<?php echo $id[$i]?>">Sửa</a></td>
    		<td width="50" align="center"><a href="Nguoi_dung_del.php?id_nd=<?php echo $id[$i]?>">Xoá</a></td>
  		</tr>
  		<?php
  			}
  		?>
  		<tr>
    		<td colspan="7" align="center">Có tổng số  <?php echo $tong_bg;?> món</td>
 	 	</tr>
	</table>
	</div>
	<br>
</body>
</html>
<script language="javascript">
	function check_input(){
		var txtHoten= document.nguoi_dung.txtHoten.value;
		var txtTK= document.nguoi_dung.txtTK.value;
		var txtMK= document.nguoi_dung.txtMK.value;
		if(txtHoten=="" || txtTK=="" || txtMK=="")
			alert("Bạn chưa nhập đủ dữ liệu. Hãy kiểm tra lại!");
		else{
			alert("Thêm người dùng thành công!");
			document.nguoi_dung.submit();
		}
			
	}
</script>		