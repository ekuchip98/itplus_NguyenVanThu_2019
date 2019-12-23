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
        $a = 5;
        echo "<pre>";
        print_r($tiente);
        echo "</pre>";

        //Kiểm tra phải mảng hay không
        var_dump(is_array($tiente));
        var_dump(is_array($a));
    ?>
</body>
</html>