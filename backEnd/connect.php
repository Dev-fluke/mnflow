<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mnflow";

// สร้างการเชื่อมต่อ
$conn = mysqli_connect($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("การเชื่อมต่อล้มเหลว: " . mysqli_connect_error());
}
?>

