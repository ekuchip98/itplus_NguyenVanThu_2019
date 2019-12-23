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

        //empty()
        //Mảng rỗng trả về true
        //Mảng không rỗng trả về false
        var_dump(empty($tiente));
    ?>
</body>
</html>