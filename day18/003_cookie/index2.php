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
        Hủy cookie vẫn dùng hàm setcookie()
        Nhưng đặt time là time trôi qua
    </pre>
    <?php
        setcookie("userphone","0374200694",time() - (86400), "/");
        //Truy vấn cookie
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

        echo "<br>" . $_COOKIE["userphone"];
    ?>
</body>
</html>