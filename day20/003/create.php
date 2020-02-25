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
    <h2>Thêm thông tin sinh viên</h2>
    <div class="row">
        <div class="col-md-12">
            <form name="create" action="save.php" method="post">
                <div class="form-group">
                    <label>Tên sinh viên:</label>
                    <input type="text"placeholder="" class="form-control" name="ten">
                </div>
                <div class="form-group">
                    <label>Điểm:</label>
                    <input type="text" placeholder=""class="form-control" name="diem">
                </div>
                <div class="form-group">
                    <label>Trường đại học:</label>
                    <input type="text"placeholder=""class="form-control" name="truong">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
