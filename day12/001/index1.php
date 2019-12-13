<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các hàm xử lý chuỗi trong PHP</h1>
    <?php
        $demo = "Hà Nội là thủ đồ của Việt Nam";
        //Đếm số ký tự trong chuỗi
        echo"<br> strlen() :".strlen($demo);
        //Đếm số chữ trong chuỗi
        echo"<br> str_word_count() :".str_word_count($demo);
        /*
         * strpos(thamso1,thamso2)
         * tham số 1 là chuỗi mẹ
         * tham số 2 là chuỗi cần tìm trong chuỗi mẹ
         * nếu tìm thấy trả về vị trí xuất hiện trong chuỗi mẹ
         * nếu không có thì không trả về false
         */
        echo"<br> strpos() :".strpos($demo,"Việt Nam");
        echo"<br>";
        $hanquoc = strpos($demo,"Hàn quốc");
        echo"<br> var_dump() :".var_dump($hanquoc);
        echo"";
        /**
         * str_replace(tham số 1 , tham số 2 , tham số 3)
         * tham số 1 : chuỗi cần thay thế
         * tham số 2 : chuỗi thay thế
         * tham số 3 : chuỗi mẹ
         */
        echo "<br> str_replace() " . str_replace("Hà Nội", "thanh pho ha noi", $demo);
    ?>
</body>
</html>