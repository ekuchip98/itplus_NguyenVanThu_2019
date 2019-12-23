<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        các cách khai báo mảng
        Cách 1 sử dụng []
        Cách 2 sử dụng array
        Cách 3 khai báo chỉ số khi khai báo mảng
        Cách 4 khai báo mảng trước và thêm các phần tử trg mảng
    </pre>
    <?php
        //Cách 1
        $tiente = ["USD","AUD","EURO","HKD"];
        //Cách 2
        $tiente = array("USD","AUD","EURO","HKD");
        //Cách 3
        $tiente = [0=>"USD",1=>"AUD",2=>"EURO",3=>"HKD"];
        //cách 4
        $tiente = [];
        $tiente[] = "USD";
        $tiente[] = "AUD";
        $tiente[] = "EURO";
        $tiente[] = "HKD";
        //cách 5
        $tiente = [];
        $tiente[0] = "USD";
        $tiente[1] = "AUD";
        $tiente[2] = "EURO";
        $tiente[3] = "HKD";
        echo "<br>";
        echo "<pre>";
        print_r($tiente);
        echo "</pre>";
    ?>
</body>
</html>