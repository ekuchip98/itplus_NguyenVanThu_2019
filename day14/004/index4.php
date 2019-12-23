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
   Gán giá trị mặc định cho tham số khi khai báo hàm
</pre>
<?php
    function tinhDienTichHinhTron($banKinh)
    {
        $direntich = $banKinh*$banKinh*3.14;
        return $direntich;
    }
    //Gọi hàm
    $kequa = tinhDienTichHinhTron();
    echo "KQ = ".$kequa;

    //Gọi hàm
    $r = 15;
    tinhDienTichHinhTron($r);
?>
</body>
</html>