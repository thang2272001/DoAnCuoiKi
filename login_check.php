<?php
session_start();

include 'dbcon.php';


  if(isset($_POST['login'])){
    $user = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    $sql = "SELECT username,password FROM `dbfood` WHERE username = '$user' AND password = '$password' ";
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

    // $user_search = "select * from user where username= '$user'";
    // $query =mysql_query($conn,$user_search);

    // $user_count = mysql_num_rows($query);

    // if($user_count){
    //   $user_pass = mysql_fetch_assoc($query);

    //   $db_pass = $user_pass['password'];

    //   // $_SESSION['txtUsername'] = $user_pass['txtUsername'];

    //   $pass_decode = password_verify($password, $db_pass);
    //   if($pass_decode){
    //     echo "Đăng nhập thành công";
        
    //   }else{
    //     echo "Mật khẩu không đúng";
    //   }
    // }else
    // {
    //   echo "Tên đăng nhập không hợp lệ";
    // }
  }
?>

