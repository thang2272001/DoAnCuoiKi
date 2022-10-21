<?php
if(isset($_POST['login']))
{
    if($_POST['txtUsername']==null)
    {
        echo("Bạn chưa nhập tên đăng nhập!<br/>");
    }
    else
    {
        $username = $_POST['txtUsername'];
    }

    if($_POST['txtPassword']==null)
    {
        echo("Bạn chưa nhập tên đăng nhập!<br/>");
    }
    else
    {
        $password = $_POST['txtPassword'];
    }

    if($username && $password)
    {
        $conn=mysqli_connect("localhost","root","") or die ("Không connect đc với máy chủ");
        mysqli_select_db($conn,"dbfood") or die ("Không tìm thấy CSDL");
        $sql = "select * from user where username='" .$username."' and password='".$password."'";
        
        $query = mysql_query($conn,$sql);

        if(mysql_num_rows($query) == 0)
        {
            echo "<script>alert('Tài khoản và mật khẩu không đúng, vui lòng nhập lại!')</script>";  
        }
        else
        {
            echo "<script>alert('Email or password is incorrect!')</script>";  
            header("Location: index.php");
        }
    }
}
?>