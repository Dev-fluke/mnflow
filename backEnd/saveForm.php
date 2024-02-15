<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dateDate = $_POST['dateDate'];
    $dataDetail = $_POST['dataDetail'];
    $dataAmount = $_POST['dataAmount'];
};

    $sql = "INSERT INTO tbl_detail (d_date, d_detail, d_amount)
    VALUES ('$dateDate', '$dataDetail', '$dataAmount')";

// การส่งคำสั่ง SQL ไปยังฐานข้อมูล
if (mysqli_query($conn, $sql)) {

    echo "<script>
    alert('บันทึกสำเร็จ');
    window.location.href = '../index.php';
    </script>";
  
} else {
    echo "เกิดข้อผิดพลาดในการแทรกข้อมูล: " . mysqli_error($conn);
}

?>