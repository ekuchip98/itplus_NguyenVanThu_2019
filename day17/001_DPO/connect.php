<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "quanlysinhvien";
try{
    $connectMysql = new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);
    $connectMysql -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}