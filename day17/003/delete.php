<?php
    include_once "connect.php";
    if(!isset($_GET["id"]) || $_GET["id"] < 1)
    {
        echo "id không hợp lệ";
        exit();
    }
    $sql = "SELECT * FROM  sinhvien WHERE id = '".(int) $_GET["id"]."'";
    $result = mysqli_query($conn,$sql);
    $sinhvien = $result->fetch_assoc();
    if(!isset($sinhvien["id"]) || $sinhvien["id"] < 1)
    {
        echo "Dữ liệu không hợp lệ";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h2>Xem thông tin sinh viên trước khi xóa</h2>
    <div class="row">
        <div class="col-md-12">
            <form name="delete" action="remove.php" method="post">
                <div class="form-group">
                    <input type="hidden" value="<?php echo $sinhvien["id"] ?>" class="form-control" name="id">
                    <label>Tên sinh viên:</label>
                    <?php echo $sinhvien["ten"]?>
                </div>
                <div class="form-group">
                    <label>Điểm:</label>
                    <?php echo $sinhvien["diem"]?>
                </div>
                <div class="form-group">
                    <label>Trường đại học:</label>
                    <?php echo $sinhvien["truong"]?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
