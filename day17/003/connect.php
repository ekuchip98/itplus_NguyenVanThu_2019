<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "quanlysinhvien";

//Kết nối OOP
$conn = mysqli_connect($severname, $username, $password, $dbname);

if(!$conn)
{
    die("Kết nối thất bại".mysqli_connect_error());
}