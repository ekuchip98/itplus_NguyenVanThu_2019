
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
    foreach ($tiente as $key_tiente => $val_tiente)
    {
        echo "<br>=> [".$key_tiente."] ".$val_tiente;
    }
    ?>
</body>
</html>