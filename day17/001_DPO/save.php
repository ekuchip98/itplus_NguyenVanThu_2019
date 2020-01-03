<?php
include_once "connect.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
if(isset($_POST["ten"]) && isset($_POST["diem"]) && isset($_POST["truong"]))
{
    $sql = "INSERT INTO sinhvien (ten,diem,truong) VALUES ('".$_POST["ten"]."','".$_POST["diem"]."','".$_POST["truong"]."')";
    echo $sql;

    $test = $connectMysql -> exec($sql);

    var_dump($test);
    //Chuyển hướng và trang index.php bằng lệnh header
    header("Location: index.php");
    exit();
}
else{
    echo "Dữ liệu không hợp lê";
}