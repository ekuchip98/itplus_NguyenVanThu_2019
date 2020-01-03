
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
        Thời gian trong PHP
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    </pre>
    <?php
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        //in ra thời gian hiện tại
        echo "<br>Loại 1: ".date("H:i:s d-m-Y");
        // in ra thời gian hiện tại loại 2
        echo "<br>Loại 2: ".time();

    ?>
</body>
</html>
