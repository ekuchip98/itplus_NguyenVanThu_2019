<?php
include_once "connect.php";
if(!isset($_POST["ten"]) && !isset($_POST["diem"]) && !isset($_POST["truong"]))
{
    $sql = "UPDATE sinhvien SET ten = '".$_POST["ten"]."',diem = '".$_POST["diem"]."',truong = '".$_POST["truong"]."' WHERE id = '".(int)$_GET["id"]."'";
    $stmt = $connectMysql->prepare($sql);
    $stmt ->execute();
    $data = $stmt->fetchAll();
    header("Location: index.php");
    exit();
}
else{
    echo "Dữ liệu không hợp lệ";
}