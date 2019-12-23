<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mảng trong php</h1>
<pre>
    Mảng trong PHP là kiểu dữ liệu chứa được nhiều gtri
    Các kiểu int,float,string,..chứa 1 gtri duy nhất
    Mảng gồm nhiều ptu
    Và mỗi ptu được tạo thành 2 yếu tố là key và value
    key của mảng bắt đầu từ 0
    các ptu trong mảng được phân tách bởi dấu ,
</pre>

<?php
    $tensinhvien = ["Nguyễn Văn Thụ","lê thúy hằng","phan anh tuấn"];
    $diemsinhvien = [5.7,8.9,3.1];
    $tuoisinhvien = [21,19,18];
    $monhoc = ["php","java",".net"];

    echo "<br>Mảng tên sinh viên";
    print_r($tensinhvien);
    echo "<br>Mảng điểm sinh viên";
    print_r($diemsinhvien);
    echo "<br>Mảng tuoi sinh viên";
    print_r($tuoisinhvien);
    echo "<br>Mảng môn học sinh viên";
    print_r($monhoc);

?>
</body>
</html>