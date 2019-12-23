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
    $vietnam = [
            "hn"=>[
                    "ten"=>"hà nội",
                    "quan"=>[
                            "th"=>"tây hồ",
                            "cg"=>"cầu giấy"
                    ],

            ],
            "hcm"=>[
                "ten"=>"Ho chi minh",
                "quan"=>[
                    "q1"=>"Quận 1",
                    "q2"=>"QUận 2"
                ],
            ],
            "dn"=>[
                "ten"=>"Đà nẵng",
                "quan"=>[
                    "st"=>"sơn trà",
                    "ht"=>"hải châu"
                ],
            ],
    ];
    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";
?>
</body>
</html>