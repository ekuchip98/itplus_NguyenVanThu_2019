
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

        Có 2 loại time trong PHP
        - loại 1: là định dạng mà con người có thể đọc dk
        ví dụ : 15:00:01 23-12-2009
        - loại 2: là định dạng time Unix có dạng
        49959444055 ( bản chất thời gian thứ 2 mili giây
        tính từ 1-1-1970
        Loại 2 tác dụng cho tính toán
    </pre>
    <?php
        //in ra thời gian hiện tại
        echo "<br>Loại 1: ".date("H:i:s d-m-Y");
        // in ra thời gian hiện tại loại 2
        echo "<br>Loại 2: ".time();

    ?>
</body>
</html>
