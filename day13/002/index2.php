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
    $sinhvien = ["a"=>"Nguyen A","b"=>"Nguyen B","c"=>"Nguyen C"];
    echo"<pre>";
    print_r($sinhvien);
    echo"</pre>";
    //in ra được các giá trị của các phần tử
    echo "<br>".$sinhvien["a"];
    echo "<br>".$sinhvien["b"];
    echo "<br>".$sinhvien["c"];

    $sinhvien["a"] = "123";
    $sinhvien["b"] = "456";
    $sinhvien["c"] = "789";
    echo "<pre>";
    print_r($sinhvien);
    echo "</pre>";
    ?>
</body>
</html>