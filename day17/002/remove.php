<?php
include_once "connect.php";
if(isset($_POST["id"]) && $_POST["id"] > 0)
{
    $id = $_POST["id"];
    $sqlDel = "DELETE FROM sinhvien WHERE id = $id";
//    $stmt = $connectMysql->prepare($sqlDel);
//    $stmt->execute();
    if($conn->query($sqlDel)===TRUE)
    {
        echo "Xóa thành công";
    }
    else
    {
        echo "Error deleting record: " . $conn->error;
    }
    header("Location: index.php");
    exit();
}
else
{
    echo "Dữ liệu chuyền đi không hợp lệ";
    exit();
}