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
    function trong php
    hàm ( function ) trong PHP là 1 tập hợp gồm nhiều câu lệnh đè thực hiện
    1 nhiệm vụ nào đó

    cú pháp của hàm như sau :
    function tên_hàm(tên_tham_so_1, tên_tham_số_2,...){
    }
    và khi gọi tên hàm
    tên_hàm(ten_tham_so_1,ten_tham_so_1,..)
</pre>
<?php
    function tinhdiemtongket($toan,$van,$anh)
    {
        $diemtongket = ($toan * 2 + $van * 2 + $anh)/5;
        echo "<br> Điểm tổng kết : ". $diemtongket;
    }
    //Gọi hàm
    tinhdiemtongket(5,6,8);
    //GỌi hàm
    $toan = 9;
    $v = 10;
    $a = 7;
    tinhdiemtongket($toan,$v,$a);

?>
</body>
</html>