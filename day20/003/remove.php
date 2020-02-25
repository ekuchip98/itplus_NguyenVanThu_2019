<?php
include_once "connect.php";
if(isset($_POST["id"]) && $_POST["id"] > 0)
{
    $id = $_POST["id"];
    $sqlDel = "DELETE FROM sinhvien WHERE id = $id";
//    $stmt = $connectMysql->prepare($sqlDel);
//    $stmt->execute();
    $connectMysql->exec($sqlDel);
    header("Location: index.php");
}
else
{
    echo "Dữ liệu chuyền đi không hợp lệ";
    exit();
}