<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
    BMI = ( cân nặng ) / chiều cao * chiều cao ;
    chú ý cân nặng tính KG
    chiều cao tính mét
    ví dụ 1 người cao 1 mét 7 và năng 56 cận
    nhập chiều cao 1.7 và cân nặng 56
    Kết quả sau khi nhập xong và ấn nút tính BMI
    in ra 2 thông số
    phân loại ( gầy , bình thường , béo ... )
    nguy cơ phát triển bệnh ( thấp , trung bình , cao ... )
    </pre>

    <?php
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        $cannang = $chieucao="";
        if(!empty($_POST) && isset($_POST["cannang"]) && isset($_POST["chieucao"]))
        {
            $cannang = $_POST["cannang"];
            $chieucao = $_POST["chieucao"];

            if($cannang > 0 && $chieucao > 0)
            {
                $imb = $cannang / ($chieucao*$chieucao);
                echo "<br> IMB = ".round($imb,2);
                if($imb < 18.5)
                {
                    echo "<br> Phân loại 'Gầy' - Nguy cơ phát triển bệnh 'Thấp'";
                }
                elseif ($imb >= 18.5 || $imb <= 24.9 )
                    echo "<br> Phân loại 'Bình thường' - Nguy cơ phát triển bệnh 'Trung bình'";
                elseif ($imb >= 25 || $imb <= 29.9 )
                    echo "<br> Phân loại \"Hơi béo\" - Nguy cơ phát triển bệnh 'Cao'";
                elseif ($imb >= 30 || $imb <= 34.9 )
                    echo "<br> Phân loại 'Béo phì c1' - Nguy cơ phát triển bệnh 'Cao'";
                elseif ($imb >= 35 || $imb <= 39.9 )
                    echo "<br> Phân loại 'Béo phì c2' - Nguy cơ phát triển bệnh 'Rất cao'";
                elseif ($imb >= 40 )
                    echo "<br> Phân loại 'Béo phì c3' - Nguy cơ phát triển bệnh 'Nguy hiểm'";
            }
            else
                echo "dữ liệu không hợp lệ";
        }
    ?>
    <div class="page-wrap">
        <form name="demo" action="" method="post">
            <p>
                <label>Cân nặng</label>
                <input type="text" name="cannang" value="<?php echo $cannang ?>" placeholder="Nhập cân nặng">
            </p>
            <p>
                <label>Chiều cao</label>
                <input type="text" name="chieucao" value="<?php echo $chieucao ?>" placeholder="Nhập chiều cao">
            </p>
            <p>
                <input type="submit" name="submit" value="Tính BMI">
            </p>
        </form>
    </div>
</body>
</html>