
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Lặp mảng
    </pre>
    <?php
    $tiente = ["USD","AUD","EURO","HKD"];
    echo "<br> dem count() = ".count($tiente);
    for($i=0; $i<count($tiente); $i++)
    {
        echo "<br>=>".$tiente[$i];
    }
    ?>
</body>
</html>