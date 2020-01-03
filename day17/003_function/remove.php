<?php
include_once "connect.php";
if(isset($_POST["id"]) && $_POST["id"] > 0)
{
    $id = $_POST["id"];
    $sqlDel = "DELETE FROM sinhvien WHERE id = $id";
//    $stmt = $connectMysql->prepare($sqlDel);
//    $stmt->execute();
    if(mysqli_query($conn,$sqlDel))
    {
        echo "Xóa thành công";
    }
    else
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    header("Location: index.php");
    exit();
}
else
{
    echo "Dữ liệu chuyền đi không hợp lệ";
    exit();
}