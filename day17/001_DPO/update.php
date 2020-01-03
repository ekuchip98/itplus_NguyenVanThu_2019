<?php
include_once "connect.php";
echo "<pre>";
print_r($_POST);
echo "</pre>";
if( isset($_POST["id"]) && $_POST["id"] > 0)
{
    $id = (int) $_POST["id"];
    $ten = $_POST["ten"];
    $diem = $_POST["diem"];
    $truong = $_POST["truong"];
    $sqlUp = "UPDATE sinhvien SET ten = '$ten', diem = $diem,truong = '$truong' WHERE id = $id";

    // Bước 1 prepate mysql
    $stmt = $connectMysql->prepare($sqlUp);
    // Bước 2 thực hiện query
    $stmt->execute();

    echo "<br>" . $stmt->rowCount() . " bản ghi cập nhật thành công";
    echo "<a href='index.php'>Quay về trang chủ</a>";
}
else{
    echo "Dữ liệu không hợp lệ";
    exit();
}