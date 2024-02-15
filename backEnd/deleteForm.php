<?php
include 'connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM tbl_detail WHERE d_id = '$id' ";
if (mysqli_query($conn, $sql)) {
    echo "<script>
    window.location.href = '../detail.php';
    </script>";
} else {
    echo "เกิดข้อผิดพลาดในการแทรกข้อมูล: " . mysqli_error($conn);
}

?>
