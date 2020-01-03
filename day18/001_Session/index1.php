<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        Session PHP là Biến toàn cục để lưu trữ thông tin phiên làm việc
        trên tất cả các trang con trong trang web
        ví dụ:
        có domain : www.zing.vn
        có $_SESSION["login"] tồn tại trên tất cả file php
        của tên miền www.zing.vn

        Ứng dụng session có rất nhiều ứng dụng
        2 ứng dụng phổ biến của session
        - Xây dựng giỏ hàng
        - Đăng ký đăng nhập và session

        Trước tiên để sd session thì phải sd session ở đầu file session_start();
    </pre>
    <?php
        //Khởi tạo gtri và lưu gtri vào session
        $_SESSION["username"] = "admin";
        $_SESSION["useremail"] = "admin@gmail.com";
        //In ra tất cả các session đang hoạt động
        //$_SESSION là 1 array
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        //Truy cập vào 1 session cụ thể
        echo "<br>".$_SESSION["username"];
        echo "<br>".$_SESSION["useremail"];
    ?>
</body>
</html>
