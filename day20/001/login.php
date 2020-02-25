<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_SESSION["login"]))
    {
        header("Location:index1.php");
        exit();
    }
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if(($username == "admin") && ($password == "123"))
        {
            $_SESSION["login"] = $username;
            
            header("Location:index1.php");
            exit();
        }
        else
        {
            echo "Tài khoản mật khẩu không đúng";
        }
    }
?>
<form action="" method="post" name="login">
    <div>
        <label>Username</label>
        <input type="text" name="username" value="">
    </div>
    <div>
        <lable>Password</lable>
        <input  type="password" name="password" value="">
    </div>
    <div>
        <input type="submit" value="Đăng nhập" name="login">
    </div>
</form>
</body>
</html>