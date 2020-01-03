<?php
    include_once "connect.php";

    $sql = "SELECT * FROM sinhvien";
    $result =mysqli_query($conn,$sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Quản lý sinh viên</h1>
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-primary">Thêm sinh viên</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped " style="border: 1px solid #0002">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sinh viên</th>
                        <th>Điểm</th>
                        <th>Trường đại học</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    /**
                     * $result->fetch_assoc() mỗi lần chạy vòng lặp
                     * sẽ lấy được 1 bản ghi trong bảng và gán cho biến $row
                     * khi bảng hết dữ liệu $result->fetch_assoc() trả về null hay flase
                     * và sẽ lấy giá trị null hay false gán $row
                     * dẫn tới vòng lặp while sẽ bị dừng
                     * $row là một mảng với các key trong mảng
                     * là tên của các cột trong bảng sinhvien
                     */
                        if(mysqli_num_rows($result) > 0)
                        {
                            while ($sinhvien = mysqli_fetch_assoc($result))
                            { ?>
                                <tr>
                                    <td><?php echo $sinhvien["id"]?></td>
                                    <td><?php echo $sinhvien["ten"]?></td>
                                    <td><?php echo $sinhvien["diem"]?></td>
                                    <td><?php echo $sinhvien["truong"]?></td>
                                    <td>
                                        <a href="view.php?id=<?php echo $sinhvien["id"] ?>" class="btn btn-success">Xem chi tiết</a>
                                        <a href="edit.php?id=<?php echo $sinhvien["id"] ?>" class="btn btn-warning">Sửa</a>
                                        <a href="delete.php?id=<?php echo $sinhvien["id"] ?>" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
