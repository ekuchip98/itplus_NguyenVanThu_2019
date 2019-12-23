<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Mảng trong php</h1>
<pre>

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

   foreach( $vietnam as $key_tp => $val_tp)
   {
       echo "<ul>";
            echo "<li>";
                echo " [".$key_tp."] ".$val_tp["ten"];
                   echo "<ol>";
                   foreach ($val_tp["quan"] as $key_quan => $val_quan)
                   {
                       echo "<li>";
                       echo " [".$key_quan."] ".$val_quan;
                       echo "</li>";
                   }
                   echo "</ul>";
            echo "</li>";
       echo "</ul>";

   }
?>
</body>
</html>