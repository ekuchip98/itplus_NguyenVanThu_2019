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


    if(isset($_POST["username"]) && $_POST["password"])
    {
        include_once "connect.php";
            $user = $_POST["username"];
            $pass = $_POST["password"];
            $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

            echo $sql;
            $stmt = $connectMysql->prepare($sql);
            $stmt->execute();

           // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $userss = $stmt->fetchAll();

            $userLogin = isset($userss[0]) ? $userss[0] : false;

            if(isset($userLogin))
            {

                $_SESSION["login"] = $userLogin["username"];
                header("Location:index1.php");
                exit();

            }
            else{
                echo  "<p>Dữ liệu đăng nhập không đúng</p>";
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