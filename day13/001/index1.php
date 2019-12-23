<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Truy cập vào phần tử của mảng thông qua key
        $ten_bien(key);
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
    ?>
</body>
</html>