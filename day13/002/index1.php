<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thay đổi gtri trong mảng chỉ số
    </pre>
    <?php
    $sinhvien = ["Nguyen A","Nguyen B","Nguyen C"];
    echo"<pre>";
    print_r($sinhvien);
    echo"</pre>";
    //in ra được các giá trị của các phần tử
    echo "<br>".$sinhvien[0];
    echo "<br>".$sinhvien[1];
    echo "<br>".$sinhvien[2];

    //
    $sinhvien[0] = "ABC";
    $sinhvien[1] = "DEF";
    $sinhvien[2] = "012";

    echo "<br>In ra cấu trúc of mảng sau khi thay đổi";
    print_r($sinhvien);

    ?>
</body>
</html>