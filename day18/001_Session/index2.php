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
        Hủy session trong PHP
        Hủy 1 session
    </pre>
    <?php

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        //Hủy 1 session
        unset($_SESSION["useremail"]);
        //Truy cập vào 1 session cụ thể
        echo "IN session sau khi hủy";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
    ?>
</body>
</html>
