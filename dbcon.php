<?php

$server = "localhost";
$user = "root";
$password = "";
$db="thang_food";

$conn = mysqli_connect('localhost', 'root', '', 'dbfood') or die ('Lỗi kết nối'); 

if($conn)
{
    ?>
    
        <script>
            alert("Kết nối thành công");
        </script>
    <?php
}
else
{
    ?>
        <script>
            alert("Kết nối không thành công");
        </script>
    <?php
}
?>