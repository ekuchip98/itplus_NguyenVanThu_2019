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
    function tinhDienTichHinhTron($banKinh = 1)
    {
        $direntich = $banKinh*$banKinh*3.14;
        return $direntich;
    }
    /*
     * Khi khai báo hàm gán sẵn giá trị cho biến
     * thì khi chạy hàm không chuyền gtri cho biến
     * thì hàm sẽ hiểu là gtri khi chuyền vào ban đầu khi
     * tạo hàm
     */
    //Gọi hàm
    $kequa = tinhDienTichHinhTron();
    echo "KQ = ".$kequa;

    //Gọi hàm
    $r = 15;
    $kq = tinhDienTichHinhTron($r);
    echo "<br>KQ = ".$kq;
?>
</body>
</html>