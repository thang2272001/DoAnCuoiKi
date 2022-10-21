<?php
if (isset($_POST['do-register']))
{
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $username   = isset($_POST['txtUsername_up']) ? mysql_escape_string($_POST['txtUsername_up']) : '';
    $password   = isset($_POST['txtPassword_up']) ? md5($_POST['txtPassword_up']) : '';
    $email      = isset($_POST['txtEmail_up'])    ? mysql_escape_string($_POST['txtEmail_up']) : '';
    
      
    // Validate Thông Tin Username và Email có bị trùng hay không
      
    // Kết nối CSDL
    $conn = mysqli_connect('localhost', 'root', '', 'thang_food') or die ('Lỗi kết nối'); 
    mysqli_set_charset($conn, "utf8");
      
    // Kiểm tra username hoặc email có bị trùng hay không
    $sql = "SELECT * FROM sign_up WHERE username = '$username' OR email = '$email'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($conn, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Thông tin đăng nhập bị sai"); window.location="index.php";</script>';
          
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO sign_up (username, email, password) VALUES ('$username','$email','$password')";
          
        if (mysqli_query($conn, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="index.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
        }
    }
}

?>