<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Các hàm thông dụng của mảng
    count(), unset(), is_array(), empty(), imlode(), explode()
    ...
    serialize(), unserialize();
</pre>
<?php
    $tiente = ["USD", "AUD", "EURO", "HKD"];
    echo "<pre>";
    print_r($tiente);
    echo "</pre>";

    //unset() hủy 1 phần tử
    unset($tiente[0]);
    echo "<pre>";
    print_r($tiente);
    echo "</pre>";
?>
</body>
</html>