<?php
    include_once "connect.php";
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
    <h2>Xem thông tin sinh viên</h2>
    <div class="row">
        <div class="col-md-12">
            <form name="view" action="" method="post">
                <div class="form-group">
                    <label>Tên sinh viên:</label>
                </div>
                <div class="form-group">
                    <label>Điểm:</label>

                </div>
                <div class="form-group">
                    <label>Trường đại học:</label>

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
