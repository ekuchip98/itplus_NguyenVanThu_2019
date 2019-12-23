<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mảng trong php</h1>
<pre>
    Trong php có 3 kiểu mảng
    kiểu 1: là mảng chỉ số (mảng có key là các số)
    kiểu 2: là mảng kết hợp( có ít nhất 1 key là chuỗi)
    kiểu 3 : là mảng đa chiều (có nghĩa mỗi phần tử của mảng là 1 mảng)
</pre>

<?php
    //Mảng chỉ số
    $mangchiso = ["Tuấn Anh","Thúy Anh","Công Vinh"];
    print_r($mangchiso);
    echo "<br>";
    $mangkethop = ["ta"=>"Tuấn Anh","tha"=>"Thúy Anh","cv"=>"Công Vinh"];
    print_r($mangkethop);
?>
</body>
</html>